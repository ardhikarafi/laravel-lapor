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
    return view('form');
});

Route::post('submitForm','UserDetailController@store');
Route::get('/index','UserDetailController@index');
Route::get('/downloadPDF/{id}','UserDetailController@downloadPDF');
