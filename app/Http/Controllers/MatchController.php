<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function create(){
        return view('match.create');
    }

    public function show($match){
        return view('match.show', ['match' => $match]);
    }

    public function update($match){
        return view('match.update', ['match' => $match]);
    }

    public function delete($match){
        return view('match.delete', ['match' => $match]);
    }

    public function store($request){

    }
}
