<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\College;
use App\Models\Matches;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $clubs = Club::all()->take(3);
        $colleges = College::all()->take(3);
        $teams = Team::all()->take(3);
        $matches = Matches::getMatchesWithTeams();

        return view('home', [
            'clubs' => $clubs ?? null,
            'colleges' => $colleges ?? null,
            'teams' => $teams ?? null,
            'matches' => $matches ?? null,
        ]);
    }
}
