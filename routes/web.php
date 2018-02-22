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
    return redirect(url('/todo'));
});

Route::get('/home', 'TodoController@home');
Route::get('/login', 'TodoController@login');

//Route::get('/todo', 'TodoController@index')->name('todo.index');
//Route::get('/todo/create', 'TodoController@create')->name('todo.create');
//Route::post('/todo', 'TodoController@store')->name('todo.store');
//Route::get('/todo/{id}/edit', 'TodoController@edit')->name('todo.edit');
//Route::put('/todo/{id}', 'TodoController@update')->name('todo.update');
//Route::delete('/todo/{id}', 'TodoController@destroy')->name('todo.destroy');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('todo', 'TodoController');
    Route::put('/todo/{id}/done', 'TodoController@done')->name('todo.done');
    Route::put('/todo/{id}/undone', 'TodoController@undone')->name('todo.undone');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
