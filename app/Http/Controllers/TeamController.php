<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create(){
        return view('team.create');
    }

    public function show($team = null){
        return view('team.show', ['team' => $team]);
    }

    public function update($team){
        return view('team.update', ['team' => $team]);
    }

    public function delete($team){
        return view('team.delete', ['team' => $team]);
    }

    public function store($request){

    }
}
