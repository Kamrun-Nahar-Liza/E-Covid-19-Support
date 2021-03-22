<?php

use App\Covid;

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
    
//     $data=[];
//     $data['covids'] = Covid::all();
//     return view('homepage',$data);

// });

Route::get('/', 'HomeController@homepage')->name('homepage');

Route::get('/service', 'HomeController@service')->name('service');
Route::get('/doctorlist', 'HomeController@doctorlist')->name('doctorlist');
Route::get('/donorlist', 'HomeController@donorlist')->name('donorlist');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/doctor', 'HomeController@doctorindex')->name('doctor');
Route::get('/patient', 'HomeController@patientindex')->name('patient');
Route::get('/admin', 'HomeController@adminindex')->name('admin');
Route::get('/plasmadonor', 'HomeController@plasmadonorindex')->name('plasmadonor');

//country
Route::resource('/countries','CountryController');

//doctorpost
Route::resource('/posts','PostController');

//comment
Route::post('/comment/{id}', 'PostController@comment')->name('comment');
Route::delete('/comment/{id}', 'PostController@delete')->name('comment.delete');

//search
Route::get('/searchboard', 'PostController@searchboard')->name('searchboard');
Route::post('/search', 'PostController@search')->name('search');

//plasmapost
Route::resource('/plasmaposts','PlasmaPostController');

//Plasma_comment
Route::post('/plasmacomment/{id}', 'PlasmaPostController@comment')->name('plasmacomment');
Route::delete('/plasmacomment/{id}', 'PlasmaPostController@delete')->name('plasmacomment.delete');



//doctor_profile
Route::resource('/profiles','ProfileController');


//plasma_profile
Route::resource('/plasmaprofiles','PlasmaProfileController');

//view donar info
Route::get('/donorinfo/{id}','PlasmaProfileController@donorinfo')->name('donorinfo');

//plasma_request
Route::resource('/plasmarequests','PlasmaRequestController')->middleware('auth');


//receive_request
Route::get('/receive', 'PlasmaRequestController@receive')->name('receive');

//request_accept
Route::post('/panel/users/accept', 'PlasmaRequestController@Accept');
Route::post('/panel/users/pending', 'PlasmaRequestController@Pending');

//covid_update
Route::resource('/covid','CovidController');

//Doctor Activity
Route::get('/doctor_activity','HomeController@doctor_activity')->name('doctor_activity');

//Patient Activity
Route::get('/patient_activity','HomeController@patient_activity')->name('patient_activity');

//Like
Route::get('/like/{id}', 'PostController@like');

//Dislike
Route::get('/dislike/{id}', 'PostController@dislike');



