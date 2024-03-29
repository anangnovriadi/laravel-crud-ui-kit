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

Route::get('/', 'BookController@index')->name('home');
Route::get('/add', 'BookController@add')->name('add');
Route::post('/add', 'BookController@create')->name('create');
Route::get('/edit/{id}', 'BookController@edit')->name('edit');
Route::patch('/update/{id}', 'BookController@update')->name('update');
Route::delete('/delete/{id}', 'BookController@delete')->name('delete');

// Route::get('/edit', function () {
//     return view('edit');
// });
