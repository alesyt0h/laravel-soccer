<?php

namespace App\Http\Controllers;

use App\Http\Requests\MatchRequest;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function create(){
        return view('match.create');
    }

    public function show($match = null){
        return view('match.show', ['match' => $match]);
    }

    public function edit($match){
        return view('match.update', ['match' => $match]);
    }

    public function update(MatchRequest $request, $match){
        return redirect()->route('match.edit', $match);
    }

    public function delete($match){
        return view('match.delete', ['match' => $match]);
    }

    public function store(MatchRequest $request){
        // $date = $request->date;
        // $local = $request->local_teams;
        // $visitor = $request->visitor_teams;
        // $status = $request->status;

        // echo $date, '<br>', $local, '<br>', $visitor, '<br>', $status, '<br>';

        $result = 'success'; // Temporary to test it // REVIEW Result of the store operation - Make redirect to /update/{id} ???
        return redirect()->route('match.create')->with(['result' => $result]);
    }
}
