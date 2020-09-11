<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('top');
//});

Route::get('/', 'TopPageController@show');
