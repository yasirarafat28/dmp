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
