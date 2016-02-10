<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function(){
    if(Auth::check()){
		return view('sample');
	}
	return view('auth.login');
});

// home page route
Route::get('/home' , 'SampleController@index');


// upload song request routes
Route::get('/up' , 'UploadSongController@index');
Route::post('/up-file' , 'UploadSongController@create');


// login and logout request routes 
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/check-login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// registration request routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/create', 'Auth\AuthController@postRegister');


//profile page route
Route::get('/profile' , 'ProfileController@index');


// Song Dedication route
Route::get('/song-dedication' , 'DedicationController@index');



Route::get('/test' , 'SampleController@index');










//  SMS api
Route::get('/sms-send' , 'SmsController@store');

Route::get('/mail-send' , 'SmsController@index');



