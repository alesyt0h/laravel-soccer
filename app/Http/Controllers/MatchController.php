<?php

namespace App\Http\Controllers;

use App\Http\Requests\MatchRequest;
use App\Models\Matches;
use App\Models\Team;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    public function create(){
        $teams = Team::all();

        return view('match.create', [
            'teams' => $teams,
            'statuses' => $this->getStatuses(),
            'results' => $this->getResults()
        ]);
    }

    public function show(Matches $match = null){

        if($match === null){
            $matches = Matches::getMatchesWithTeams(PHP_INT_MAX);
        } else {
            $match->visitor = Team::select('name', 'shield')->where('id', $match->visitor)->first();
            $match->local = Team::select('name', 'shield')->where('id', $match->local)->first();
        }

        return view('match.show', ['match' => $match, 'matches' => $matches ?? null]);
    }

    public function edit(Matches $match){
        $teams = Team::all();

        return view('match.update', [
            'match' => $match,
            'teams' => $teams,
            'statuses' => $this->getStatuses(),
            'results' => $this->getResults()
        ]);
    }

    public function delete(Matches $match){
        $match->visitor = Team::select('name', 'shield')->where('id', $match->visitor)->first();
        $match->local = Team::select('name', 'shield')->where('id', $match->local)->first();

        return view('match.delete', ['match' => $match]);
    }

    public function destroy(Matches $match){
        try {
            $visitor = Team::select('name')->where('id', $match->visitor)->first();
            $local = Team::select('name')->where('id', $match->local)->first();

            $match->delete();

            $success = true;
            $result = "Match {$local->name} vs {$visitor->name} deleted successfully";

            return redirect()->route('home')->with(['result' => $result, 'success' => $success]);
        } catch (\Throwable $th) {
            return redirect()->route('match.edit', $match)->with(['result' => $th->getMessage()]);
        }
    }

    public function update(MatchRequest $request, Matches $match){
        try {
            $match->update($request->all());

            return redirect()->route('match.show', $match);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '22007') ? 'Incorrect date format. Should be YEAR-MONTH-DAY' : $th->getMessage();

            return redirect()->route('match.edit', $match)->with(['result' => $result]);
        }
    }

    public function store(MatchRequest $request){

        try {
            $match = Matches::create($request->all());

            $match->save();

            return redirect()->route('match.show', $match);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '22007') ? 'Incorrect date format. Should be YEAR-MONTH-DAY' : $th->getMessage();

            return redirect()->route('match.create')->with(['result' => $result]);
        }
    }

    public function getStatuses(){
        $statuses = ['played', 'canceled', 'in progress'];
        return $statuses;
    }

    public function getResults(){
        $results = ['local', 'visitor', 'draw', 'not played yet'];
        return $results;
    }
}
