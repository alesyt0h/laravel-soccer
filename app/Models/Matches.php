<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    //Match is reserved word in Laravel used by PhpParser
    protected $table = 'matches';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function getMatchesWithTeams(){
        $matches = Matches::select(
            'matches.id',
            'visitors.name AS visitor',
            'locals.name AS local',
            'matches.match_date',
            'matches.result',
            'matches.status'
        )->from('matches')
        ->join('teams AS visitors', 'matches.visitor', '=', 'visitors.id')
        ->join('teams AS locals', 'matches.local', '=', 'locals.id')
        ->take(10)
        ->get();

        return $matches;
    }

}
