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

use Illuminate\Http\Request;

// points to homepage
Route::get('/', function () {
    return view('home');
});


//Books collection routes
Route::get('/books', 'BookController@index');
Route::post('/books', 'BookController@create');

//Books singular routes
Route::get('/books/{id}', 'BookController@show');
Route::put('/books/{id}', 'BookController@update');
Route::delete('/books/{id}', 'BookController@destroy');

//Movies collection routes
Route::get('/movies', 'MovieController@index');
Route::post('/movies', 'MovieController@create');

//Movies singular routes
Route::get('/movies/{id}', 'MovieController@show');
Route::put('/movies/{id}', 'MovieController@update');
Route::delete('/movies/{id}', 'MovieController@destroy');

//Shows collection routes
Route::get('/shows', 'ShowController@index');
Route::post('/shows', 'ShowController@create');

//Shows singular routes
Route::get('/shows/{id}', 'ShowController@show');
Route::put('/shows/{id}', 'ShowController@update');
Route::delete('/shows/{id}', 'ShowController@destroy');
