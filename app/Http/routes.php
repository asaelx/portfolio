<?php

// Home
Route::get('/', 'HomeController@index');

Route::get('shot/{id?}', 'HomeController@shot');

Route::get('changeLang/{lang}', 'HomeController@changeLang');

// Login
Route::get('login', 'LoginController@index');

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

Route::group(['middleware' => 'login'], function () {

    // Admin
    Route::get('admin', 'AdminController@index');
    Route::get('admin/config', 'AdminController@show');
    Route::post('admin/config/update', 'AdminController@update');

    // Shots
    Route::get('admin/shots', 'ShotsController@index');
    Route::get('admin/shot/{id?}', 'ShotsController@show');
    Route::post('admin/shot/create', 'ShotsController@create');
    Route::post('admin/shot/edit/{id}', 'ShotsController@edit');
    Route::get('admin/shot/delete/{id}', 'ShotsController@delete');

    // Tags
    Route::get('admin/tags', 'TagsController@index');
    Route::get('admin/tag/{id?}', 'TagsController@show');
    Route::post('admin/tag/create', 'TagsController@create');
    Route::post('admin/tag/edit/{id}', 'TagsController@edit');
    Route::get('admin/tag/delete/{id}', 'TagsController@delete');

    // Programs
    Route::get('admin/programs', 'ProgramsController@index');
    Route::get('admin/program/{id?}', 'ProgramsController@show');
    Route::post('admin/program/create', 'ProgramsController@create');
    Route::post('admin/program/edit/{id}', 'ProgramsController@edit');
    Route::get('admin/program/delete/{id}', 'ProgramsController@delete');

});
