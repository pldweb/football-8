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


Route::view('/Clubs', 'pages/landing-pages/clubs');
Route::view('/Managers', 'pages/lagind-pages/managers');
Route::view('/Players', 'pages/lagind-pages/players');
Route::view('/Stadiums', 'pages/lagind-pages/stadiums');