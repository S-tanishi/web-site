<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('top');
//});

// Route::get('/', 'TopController@show')->name('top');

Route::get('/', 'TopPageController@show');
// Route::get('/about', 'AboutPageController@show');
