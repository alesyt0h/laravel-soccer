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
}
