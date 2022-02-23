<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function create(){
        return view('college.create');
    }

    public function show($college){
        return view('college.show', ['college' => $college]);
    }

    public function update($college){
        return view('college.update', ['college' => $college]);
    }

    public function delete($college){
        return view('college.delete', ['college' => $college]);
    }

    public function store($request){

    }
}
