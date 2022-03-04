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

Route::get('/', function () { return view('home'); })->name('home');

// College
Route::controller(CollegeController::class)->group(function () {
    Route::get('college/create', 'create')->name('college.create');
    Route::get('college/edit/{id}', 'edit')->name('college.edit');
    Route::get('college/delete/{id}', 'delete')->name('college.delete');
    Route::get('college/{id?}', 'show')->name('college.show');
    Route::post('college/create', 'store')->name('college.store');
    Route::put('college/update/{id}', 'update')->name('college.update');
    Route::delete('college/destroy/{id}', 'destroy')->name('college.destroy');
});

// Club
Route::controller(ClubController::class)->group(function () {
    Route::get('club/create', 'create')->name('club.create');
    Route::get('club/edit/{club}', 'edit')->name('club.edit');
    Route::get('club/delete/{club}', 'delete')->name('club.delete');
    Route::get('club/{club?}', 'show')->name('club.show');
    Route::post('club/create', 'store')->name('club.store');
    Route::put('club/update/{club}', 'update')->name('club.update');
    Route::delete('club/destroy/{club}', 'destroy')->name('club.destroy');
});

// Team
Route::controller(TeamController::class)->group(function () {
    Route::get('team/create', 'create')->name('team.create');
    Route::get('team/edit/{id}', 'edit')->name('team.edit');
    Route::get('team/delete/{id}', 'delete')->name('team.delete');
    Route::get('team/{id?}', 'show')->name('team.show');
    Route::post('team/create', 'store')->name('team.store');
    Route::put('team/update/{id}', 'update')->name('team.update');
    Route::delete('team/destroy/{id}', 'destroy')->name('team.destroy');
});

// Match
Route::controller(MatchController::class)->group(function () {
    Route::get('match/create', 'create')->name('match.create');
    Route::get('match/edit/{id}', 'edit')->name('match.edit');
    Route::get('match/delete/{id}', 'delete')->name('match.delete');
    Route::get('match/{id?}', 'show')->name('match.show');
    Route::post('match/create', 'store')->name('match.store');
    Route::put('match/update/{id}', 'update')->name('match.update');
    Route::delete('match/destroy/{id}', 'destroy')->name('match.destroy');
});
