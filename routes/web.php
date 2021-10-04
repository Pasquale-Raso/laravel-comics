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
    return view('pages.home');
})->name('home');

Route::get('/characters', function () {
    return view('pages.characters');
})->name('characters');

Route::get('/comics', function () {
    return view('pages.comics', ['comics' => config("fumetti")]);
})->name('comics');


Route::get('/fumetti', function () {
    $fumetti = config('fumetti');
    $fumetto = $fumetti [1];
    return view('pages.fumetti.fumetti', compact('fumetto'));
})->name('fumetto');

Route::get('/movies', function () {
    return view('pages.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('pages.tv');
})->name('tv');

Route::get('/games', function () {
    return view('pages.games');
})->name('games');

Route::get('/collectibles', function () {
    return view('pages.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('pages.videos');
})->name('videos');

Route::get('/fans', function () {
    return view('pages.fans');
})->name('fans');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');

Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');