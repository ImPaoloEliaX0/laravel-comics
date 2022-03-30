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
    $infos = config('infos');
    

    return view('characters', ['data'=>$comics, 'infos'=>$infos]);
});

Route::get('/comics', function () {
    return view('comics');
});

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    if(is_numeric($id) && $id >= 0 && $id < count($comics)){
        return view('comic', ['comic' => $comics[$id]]);
    } else{
        return "Error 404";
    }
});

Route::get('/movies', function () {
    return view('movies');
});



Route::get('/games', function () {
    return view('games');
});



Route::get('/fans', function () {
    return view('fans');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/shop', function () {
    return view('shop');
});
