<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function create(){
        return view('college.create');
    }

    public function show($college = null){
        return view('college.show', ['college' => $college]);
    }

    public function update($college){
        return view('college.update', ['college' => $college]);
    }

    public function delete($college){
        return view('college.delete', ['college' => $college]);
    }

    public function store(Request $request){
        $name = $request->name;
        $shield = $request->shield;
        $foundation = $request->foundation;

        echo $name, '<br>', $shield, '<br>', $foundation;

        $result = 'success'; // Temporary to test it // REVIEW Result of the store operation - Make redirect to /update/{id} ???
        return redirect('match.create')->with(['result' => $result]);
    }
}
