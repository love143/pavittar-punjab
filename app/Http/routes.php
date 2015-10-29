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

Route::get('/', 'MainController@index');

Route::get('/about-us', 'MainController@AboutUs');

Route::get('/contact', 'MainController@Contact');

Route::get('/hott', 'MainController@Hott');

Route::get('/songs', 'MainController@songs');

Route::get('/videos', 'MainController@videos');

Route::get('/sign-in', 'MainController@sign_in');

Route::get('/register', 'MainController@Register');