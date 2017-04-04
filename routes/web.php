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
//BOOKS ROUTES
//Books collection routes
Route::get('/books', 'BookController@index');
Route::post('/books', 'BookController@create');

//Books singular route
Route::get('/books/{id}', 'BookController@show');
Route::put('/books/{id}', 'BookController@update');
Route::delete('/books/{id}', 'BookController@destroy');

//Movies collection routes
