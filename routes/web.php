<?php

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
    return view('welcome');
});

// Create
Route::get('create/college');
Route::get('create/club');
Route::get('create/team');
Route::get('create/match');

// Update
Route::get('update/college/{id}', function ($id) {});
Route::get('update/club/{id}', function ($id) {});
Route::get('update/team/{id}', function ($id) {});
Route::get('update/match/{id}', function ($id) {});

// Delete
Route::get('delete/college/{id}', function ($id) {});
Route::get('delete/club/{id}', function ($id) {});
Route::get('delete/team/{id}', function ($id) {});
Route::get('delete/match/{id}', function ($id) {});
