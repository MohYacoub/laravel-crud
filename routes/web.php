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

// Route::get('/', function () {
//     return view('trainees.TraineesPage');
// });

Route::get('/', 'StudentController@index');
Route::get('/{id}', 'StudentController@show');
Route::get('/att/att', 'StudentController@index2');
