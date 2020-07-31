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

Route::get('/', 'Movies@getCache')->name('movie.home');
Route::get('/movies', 'Movies@searchMovies')->name('movie.list');
Route::post('/movies','Movies@searchMovies')->name('movie.search');
Route::get('/movie/{id}', 'Movies@movieDetail')->name('movie.detail');
