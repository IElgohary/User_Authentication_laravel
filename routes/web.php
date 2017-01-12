<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/private/page','ProfileController@index')->
middleware('LoggedIn');

Route::post('/profile','ProfileController@store');

Route::get('/edit_profile','ProfileController@edit');

Route::get('/edit_info','UserController@edit');

Route::post('/updated_info','UserController@store');
