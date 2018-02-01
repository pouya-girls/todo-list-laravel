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

Route::get('/home', 'TodoController@home');
Route::get('/login', 'TodoController@login');

Route::get('/todo', 'TodoController@index');
Route::get('/todo/create', 'TodoController@create');