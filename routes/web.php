<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// College
Route::controller(CollegeController::class)->group(function () {
    Route::get('college/create', 'create')->name('create');
    Route::get('college/edit/{id}', 'edit');
    Route::get('college/delete/{id}', 'delete');
    Route::get('college/{id?}', 'show');
    Route::post('college/create', 'store');
    Route::put('college/update/{id}', 'update');
    Route::delete('college/destroy/{id}', 'destroy');
});

// Club
Route::controller(ClubController::class)->group(function () {
    Route::get('club/create', 'create');
    Route::get('club/edit/{id}', 'edit');
    Route::get('club/delete/{id}', 'delete');
    Route::get('club/{id?}', 'show');
    Route::post('club/create', 'store');
    Route::put('club/update/{id}', 'update');
    Route::delete('club/destroy/{id}', 'destroy');
});

// Team
Route::controller(TeamController::class)->group(function () {
    Route::get('team/create', 'create');
    Route::get('team/edit/{id}', 'edit');
    Route::get('team/delete/{id}', 'delete');
    Route::get('team/{id?}', 'show');
    Route::post('team/create', 'store');
    Route::put('team/update/{id}', 'update');
    Route::delete('team/destroy/{id}', 'destroy');
});

// Match
Route::controller(MatchController::class)->group(function () {
    Route::get('match/create', 'create');
    Route::get('match/edit/{id}', 'edit');
    Route::get('match/delete/{id}', 'delete');
    Route::get('match/{id?}', 'show');
    Route::post('match/create', 'store');
    Route::put('match/update/{id}', 'update');
    Route::delete('match/destroy/{id}', 'destroy');
});
