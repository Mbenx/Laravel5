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
Route::get('/', 'HomeController@index');

Route::get('/department', 'DepartmentController@index');
Route::get('/department/create', 'DepartmentController@create');

Route::get('/position', 'PositionController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/cek', function () {
//     return view('cek');
// });

// Route::get('users/{string}', function ($string) {
//     return "Nama saya adalah ". $string;
// });


