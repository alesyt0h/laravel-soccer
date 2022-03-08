<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollegeRequest;
use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function create(){
        return view('college.create');
    }

    public function show(College $college = null){
        return view('college.show', ['college' => $college]);
    }

    public function edit(College $college){
        return view('college.update', ['college' => $college]);
    }

    public function delete(College $college){
        return view('college.delete', ['college' => $college]);
    }

    public function destroy(College $college){
        try {
            $college->delete();

            return redirect()->route('home');
        } catch (\Throwable $th) {
            return redirect()->route('college.edit', $college)->with(['result' => $th->getMessage()]);
        }
    }

    public function update(CollegeRequest $request, College $college){
        try {
            $college->update($request->all());

            return redirect()->route('college.show', $college);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '22007') ? 'Incorrect date format. Should be YEAR-MONTH-DAY' : $th->getMessage();

            return redirect()->route('college.edit', $college)->with(['result' => $result]);
        }
    }

    public function store(CollegeRequest $request){
        try {
            $college = College::create($request->all());
            $college->save();

            return redirect()->route('college.show', $college);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '22007') ? 'Incorrect date format. Should be YEAR-MONTH-DAY' : $th->getMessage();

            return redirect()->route('college.create')->with(['result' => $result]);
        }
    }
}
