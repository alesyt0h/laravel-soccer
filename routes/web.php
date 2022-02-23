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

// TODO: Route Groups

Route::get('/', function () {
    return view('welcome');
});

// Create Views
Route::get('create/college');
Route::get('create/club');
Route::get('create/team');
Route::get('create/match');

// Create Action
Route::post('create/college');
Route::post('create/club');
Route::post('create/team');
Route::post('create/match');

// Show
Route::get('show/college');
Route::get('show/club');
Route::get('show/team');
Route::get('show/match');

// Update Views
Route::get('update/college/{id}', function ($id) {});
Route::get('update/club/{id}', function ($id) {});
Route::get('update/team/{id}', function ($id) {});
Route::get('update/match/{id}', function ($id) {});

// Update Action
Route::put('update/college/{id}', function ($id) {});
Route::put('update/club/{id}', function ($id) {});
Route::put('update/team/{id}', function ($id) {});
Route::put('update/match/{id}', function ($id) {});

// Delete Views
Route::get('delete/college/{id}', function ($id) {});
Route::get('delete/club/{id}', function ($id) {});
Route::get('delete/team/{id}', function ($id) {});
Route::get('delete/match/{id}', function ($id) {});

// Delete Action
Route::delete('delete/college/{id}', function ($id) {});
Route::delete('delete/club/{id}', function ($id) {});
Route::delete('delete/team/{id}', function ($id) {});
Route::delete('delete/match/{id}', function ($id) {});
