<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');

// College
Route::controller(CollegeController::class)->middleware(['auth','verified'])->group(function () {
    Route::get('college/create', 'create')->name('college.create');
    Route::get('college/edit/{college}', 'edit')->name('college.edit');
    Route::get('college/delete/{college}', 'delete')->name('college.delete');
    Route::get('college/{college?}', 'show')->name('college.show');
    Route::post('college/create', 'store')->name('college.store');
    Route::put('college/update/{college}', 'update')->name('college.update');
    Route::delete('college/destroy/{college}', 'destroy')->name('college.destroy');
});

// Club
Route::controller(ClubController::class)->middleware(['auth','verified'])->group(function () {
    Route::get('club/create', 'create')->name('club.create');
    Route::get('club/edit/{club}', 'edit')->name('club.edit');
    Route::get('club/delete/{club}', 'delete')->name('club.delete');
    Route::get('club/{club?}', 'show')->name('club.show');
    Route::post('club/create', 'store')->name('club.store');
    Route::put('club/update/{club}', 'update')->name('club.update');
    Route::delete('club/destroy/{club}', 'destroy')->name('club.destroy');
});

// Team
Route::controller(TeamController::class)->middleware(['auth','verified'])->group(function () {
    Route::get('team/create', 'create')->name('team.create');
    Route::get('team/edit/{team}', 'edit')->name('team.edit');
    Route::get('team/delete/{team}', 'delete')->name('team.delete');
    Route::get('team/{team?}', 'show')->name('team.show');
    Route::post('team/create', 'store')->name('team.store');
    Route::put('team/update/{team}', 'update')->name('team.update');
    Route::delete('team/destroy/{team}', 'destroy')->name('team.destroy');
});

// Match
Route::controller(MatchController::class)->middleware(['auth','verified'])->group(function () {
    Route::get('match/create', 'create')->name('match.create');
    Route::get('match/edit/{match}', 'edit')->name('match.edit');
    Route::get('match/delete/{match}', 'delete')->name('match.delete');
    Route::get('match/{match?}', 'show')->name('match.show');
    Route::post('match/create', 'store')->name('match.store');
    Route::put('match/update/{match}', 'update')->name('match.update');
    Route::delete('match/destroy/{match}', 'destroy')->name('match.destroy');
});

require __DIR__.'/auth.php';
