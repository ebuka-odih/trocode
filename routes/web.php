<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::view('/', 'pages.index')->name('index');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('users', 'Admin\AdminController@users')->name('users');
});
Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
include 'admin.php';
