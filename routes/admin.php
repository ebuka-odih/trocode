<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['admin', 'auth', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('users', 'Admin\UserController@users')->name('users');
    Route::get('profile/{id}', 'Admin\UserController@profile')->name('profile');

    Route::resource('ads', "Admin\AdminAdsController");
    Route::get('campaigns', "Admin\AdminCampaign@campaigns")->name('campaigns');
    Route::get('campaigns/details/{id}', "Admin\AdminCampaign@preview")->name('preview');
    Route::get('approve/campaign/{id}', "Admin\AdminCampaign@approve")->name('approve');
});
