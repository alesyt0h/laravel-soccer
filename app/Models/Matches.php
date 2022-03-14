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

    public static function getMatchesWithTeams($take = 3){
        $matches = Matches::select(
            'matches.id',
            'visitors.name AS visitor',
            'locals.name AS local',
            'matches.match_date',
            'matches.result',
            'matches.status',
            'matches.created_at',
            'matches.updated_at'
        )->from('matches')
        ->join('teams AS visitors', 'matches.visitor', '=', 'visitors.id')
        ->join('teams AS locals', 'matches.local', '=', 'locals.id')
        ->take($take)
        ->paginate($take);

        return $matches;
    }

}
