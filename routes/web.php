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
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/doctor', 'HomeController@doctorindex')->name('doctor');
Route::get('/patient', 'HomeController@patientindex')->name('patient');
Route::get('/admin', 'HomeController@adminindex')->name('admin');
Route::get('/plasmadonor', 'HomeController@plasmadonorindex')->name('plasmadonor');
