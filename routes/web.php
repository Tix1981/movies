<?php

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

Route::get('/', ['as' => 'movies', 'uses' => 'MoviesController@index']);

Route::get('/movies/create', ['as' => 'create-movies', 'uses' => 'MoviesController@create']);

Route::get('/movies/genres/{genre}', ['as' => 'movies-by-genre', 'uses' => 'GenresController@show']);

Route::post('/movies', 'MoviesController@store');

Route::get('/movies/{id}', ['as' => 'single-movie', 'uses' => 'MoviesController@show']);

Route::post('/movies/{movie_id}/comments', ['as' => 'movie-comments', 'uses' => 'CommentsController@store']);
