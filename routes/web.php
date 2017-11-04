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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/author', 'AuthorController@index');

Route::get('/authors/author/{id}', 'AuthorController@show')->name('author detail');

Route::get('/author/new', 'AuthorController@create');


Route::post('/author/new', 'AuthorController@store');

//edit author
Route::get('/author/edit/{id}', 'AuthorController@edit');
Route::post('/author/edit/{id}', 'AuthorController@store');

//list all authors
Route::get('/authors/list', 'AuthorController@listing');