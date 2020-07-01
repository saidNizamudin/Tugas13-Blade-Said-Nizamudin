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


Route::get('/', function() {
    return view('Tugas13.index');
});

Route::get('/data-tables', function() {
    return view('Tugas13.data-tables');
});

Route::get('/form',"AuthController@form");
Route::post('/form',"AuthController@form_post");

Route::get('/welcome',"AuthController@welcome");
