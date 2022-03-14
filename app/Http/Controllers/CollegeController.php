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

        if($college === null){
            $colleges = College::paginate();
        }

        return view('college.show', ['college' => $college, 'colleges' => $colleges ?? null]);
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

            $success = true;
            $result = "College {$college->name} deleted successfully";

            return redirect()->route('home')->with(['result' => $result, 'success' => $success]);
        } catch (\Throwable $th) {
            $result = ($th->getCode() === '23000') ? 'You must delete first the teams associated to this college' : $th->getMessage();

            return redirect()->route('college.delete', $college)->with(['result' => $result]);
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
