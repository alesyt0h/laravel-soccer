<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create(){
        return view('team.create');
    }

    public function show($team = null){
        return view('team.show', ['team' => $team]);
    }

    public function edit($team){
        return view('team.update', ['team' => $team]);
    }

    public function update(TeamRequest $request, $team){
        return redirect()->route('team.edit', $team);
    }

    public function delete($team){
        return view('team.delete', ['team' => $team]);
    }

    public function store(TeamRequest $request){
        // $name = $request->name;
        // $shield = $request->shield;
        // $foundation = $request->foundation;
        // $owner_type = $request->owner_type;
        // $owner = $request->owner;

        // echo $name, '<br>', $shield, '<br>', $foundation, '<br>', $owner_type, '<br>', $owner;

        $result = 'success'; // Temporary to test it // REVIEW Result of the store operation - Make redirect to /update/{id} ???
        return redirect()->route('team.create')->with(['result' => $result]);
    }
}
