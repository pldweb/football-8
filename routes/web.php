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
    return view('pages/landing-pages/index');
});


Route::view('/clubs', 'pages/landing-pages/clubs');
Route::view('/managers', 'pages/landing-pages/managers');
Route::view('/players', 'pages/landing-pages/players');
Route::view('/stadiums', 'pages/landing-pages/stadiums');