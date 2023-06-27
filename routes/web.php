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
    $comics = config('storeComics');
    return view('welcome', compact('comics'));
});

Route::get('/otherpage', function () {
    $comics = config('storeComics');
    return view('other', compact('comics'));
});