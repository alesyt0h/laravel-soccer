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

    public function show(Club $club = null){

        if($club === null){
            $clubs = Club::all();
        }

        return view('club.show', ['club' => $club, 'clubs' => $clubs ?? null]);
    }

    public function edit(Club $club){
        return view('club.update', ['club' => $club]);
    }

    public function delete(Club $club){
        return view('club.delete', ['club' => $club]);
    }

    public function destroy(Club $club){
        try {
            $club->delete();

            $success = true;
            $result = "Club {$club->name} deleted successfully";

            return redirect()->route('home')->with(['result' => $result, 'success' => $success]);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '23000') ? 'You must delete first the teams associated to this club' : $th->getMessage();

            return redirect()->route('club.delete', $club)->with(['result' => $result]);
        }
    }

    public function update(ClubRequest $request, Club $club){
        try {
            $club->update($request->all());

            return redirect()->route('club.show', $club);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '22007') ? 'Incorrect date format. Should be YEAR-MONTH-DAY' : $th->getMessage();

            return redirect()->route('club.edit', $club)->with(['result' => $result]);
        }
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
