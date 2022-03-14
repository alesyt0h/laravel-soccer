<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Club;
use App\Models\College;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create(){
        $colleges = $this->getColleges();
        $clubs = $this->getClubs();

        return view('team.create', ['colleges' => $colleges, 'clubs' => $clubs]);
    }

    public function show(Team $team = null){

        if($team === null){
            $teams = Team::all();
        } else if($team->college_owner){
            $isCollege = 'checked';
            $team->college_owner = College::select('name','id')->where('id', $team->college_owner)->first();
        } else if($team->club_owner){
            $isClub = 'checked';
            $team->club_owner = Club::select('name','id')->where('id', $team->club_owner)->first();
        }

        return view('team.show', ['team' => $team, 'teams' => $teams ?? null]);
    }

    public function edit(Team $team){
        $colleges = $this->getColleges();
        $clubs = $this->getClubs();

        if($team->college_owner){
            $isCollege = 'checked';
        } else {
            $isClub = 'checked';
        }

        return view('team.update', ['team' => $team, 'colleges' => $colleges, 'clubs' => $clubs, 'isCollege' => $isCollege ?? '', 'isClub' => $isClub ?? '']);
    }

    public function delete(Team $team){
        return view('team.delete', ['team' => $team]);
    }

    public function destroy(Team $team){
        try {
            $team->delete();

            $success = true;
            $result = "Team {$team->name} deleted successfully";

            return redirect()->route('home')->with(['result' => $result, 'success' => $success]);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '23000') ? 'You must delete first the matches associated to this team' : $th->getMessage();

            return redirect()->route('team.edit', $team)->with(['result' => $result]);
        }
    }

    public function update(TeamRequest $request, Team $team){
        try {
            $team->club_owner = null;
            $team->college_owner = null;
            $team[$request->owner_type . '_owner'] = $request->owner;

            $team->update($request->all());


            return redirect()->route('team.show', $team);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '22007') ? 'Incorrect date format. Should be YEAR-MONTH-DAY' : $th->getMessage();

            return redirect()->route('team.edit', $team)->with(['result' => $result]);
        }
    }

    public function store(TeamRequest $request){

        try {
            $team = Team::create($request->all());
            $team[$request->owner_type . '_owner'] = $request->owner;

            $team->save();

            return redirect()->route('team.show', $team);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '22007') ? 'Incorrect date format. Should be YEAR-MONTH-DAY' : $th->getMessage();

            return redirect()->route('team.create')->with(['result' => $result]);
        }
    }

    public function getColleges(){
        return College::all();
    }

    public function getClubs(){
        return Club::all();
    }
}
