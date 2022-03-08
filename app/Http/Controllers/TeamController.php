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
        return view('team.show', ['team' => $team]);
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

            return redirect()->route('home');
        } catch (\Throwable $th) {
            return redirect()->route('team.edit', $team)->with(['result' => $th->getMessage()]);
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
