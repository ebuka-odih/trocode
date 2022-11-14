<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::view('/', 'pages.index')->name('index');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::view('demo', 'dashboard.demo');
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('profile', 'UserController@profile')->name('myprofile');
    Route::get('setting', 'UserController@setting')->name('settings');
    Route::post('update/password', 'UserController@storePassword')->name('storePassword');

    Route::get('fund', "FundController@deposits")->name('deposits');
    Route::post('pay', "FundController@pay")->name('pay');

    Route::get('campaign/{id}', "CampaignController@create")->name('campaign');
    Route::post('campaign', "CampaignController@getData")->name('getData');
    Route::get('review/225{id}34', "CampaignController@review")->name('review');
    Route::post('proceed', "CampaignController@proceed")->name('proceed');
    Route::get('edit/campaign/225{id}34', "CampaignController@edit")->name('edit');
    Route::get('campaigns', "CampaignController@campaigns")->name('campaigns');
    Route::get('place/campaigns', "CampaignController@index")->name('addCamp');
});
Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
include 'admin.php';

