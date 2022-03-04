<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClubRequest;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function create(){
        return view('club.create');
    }

    public function show($club = null){
        return view('club.show', ['club' => $club]);
    }

    public function update(ClubRequest $club){
        return redirect()->route('club.update', $club);
    }

    public function edit($club){
        return view('club.update', ['club' => $club]);
    }

    public function delete($club){
        return view('club.delete', ['club' => $club]);
    }

    public function store(ClubRequest $request){
        // $name = $request->name;
        // $shield = $request->shield;
        // $foundation = $request->foundation;

        // echo $name, '<br>', $shield, '<br>', $foundation;

        $result = 'success'; // Temporary to test it // REVIEW Result of the store operation - Make redirect to /update/{id} ???
        return redirect('club.create')->with(['result' => $result]);
    }
}
