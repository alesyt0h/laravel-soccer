<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function create(){
        return view('club.create');
    }

    public function show($club = null){
        return view('club.show', ['club' => $club]);
    }

    public function update($club){
        return view('club.update', ['club' => $club]);
    }

    public function delete($club){
        return view('club.delete', ['club' => $club]);
    }

    public function store($request){

    }
}
