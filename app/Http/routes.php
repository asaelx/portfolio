<?php

Route::get('/', 'HomeController@index');
Route::get('shot', function(){
    return view('single');
});
