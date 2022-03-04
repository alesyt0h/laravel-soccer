<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClubRequest;
use App\Models\Club;
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

        try {
            $club = Club::create($request->all());
            $club->save();

            return redirect()->route('club.show', $club);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '22007') ? 'Incorrect date format. Should be YEAR-MONTH-DAY' : $th->getMessage();

            return redirect()->route('club.create')->with(['result' => $result]);
        }
    }
}
