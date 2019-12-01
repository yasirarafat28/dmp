<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front/home');
});

Route::get('/about', function () {
    return view('front/about');
});
Route::get('/developer', function () {
    return view('front/developer');
});
Route::get('/about', function () {
    return view('front/about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth','role:dmp'], 'prefix' => 'dmp'], function () {
    Route::get('dashboard', 'DashboardController@DmpDashboard')->name('DmpDashboard');
    Route::resource('notice', 'NoticeController');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('houses', 'Admin\HouseController');
    Route::resource('residents', 'Admin\ResidentController');

});


Route::group(['middleware' => ['auth','role:house_owner'], 'prefix' => 'house-owner'], function () {
    Route::get('dashboard', 'DashboardController@HouseOwnerDashboard')->name('HouseOwnerDashboard');

});
