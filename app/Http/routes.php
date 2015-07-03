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

Route::get('/', function () {
    return view('home');
});

Route::get('shot', function () {
    return view('shot');
});

Route::get('login', 'LoginController@index');

Route::get('admin', function () {
    return view('admin');
});

Route::get('twitter/login', [
    'uses'  => 'LoginController@login',
    'as'    => 'twitter.login'
]);

Route::get('twitter/callback', [
    'uses'  => 'LoginController@callback',
    'as'    => 'twitter.callback'
]);

Route::get('twitter/error', [
    'uses'  => 'LoginController@error',
    'as'    => 'twitter.error'
]);

Route::get('twitter/logout', [
    'uses'  => 'LoginController@logout',
    'as'    => 'twitter.logout'
]);
