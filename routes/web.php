<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'pages.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
