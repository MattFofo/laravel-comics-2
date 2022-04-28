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
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.home', $data);
})->name('home');


Route::get('/characters', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.characters', $data);
})->name('characters');


Route::get('/movies', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.movies', $data);
})->name('movies');


Route::get('/tv', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.tv', $data);
})->name('tv');


Route::get('/games', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.games', $data);
})->name('games');


Route::get('/collectibles', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.collectibles', $data);
})->name('collectibles');


Route::get('/videos', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.videos', $data);
})->name('videos');


Route::get('/fans', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.fans', $data);
})->name('fans');


Route::get('/news', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.news', $data);
})->name('news');


Route::get('/shop', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.shop', $data);
})->name('shop');


Route::get('/comic/{id}', function ($id) {
    $data = collect(config('comics'));
    $selectedComics = $data->where('id', $id);
    $selectedComic = array_values($selectedComics->all());

    // @dd($id, $data, $selectedComic );

    return view('guest.comic', ['comic' =>  $selectedComic]);
})->name('comic');
