<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/house', function () {
    $records = \App\House::with('owner')->get();
    return view('front/house', compact('records'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'role:dmp'], 'prefix' => 'dmp'], function () {
    Route::get('dashboard', 'DashboardController@DmpDashboard')->name('DmpDashboard');
    Route::resource('notice', 'NoticeController');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('houses', 'Admin\HouseController');
    Route::resource('residents', 'Admin\ResidentController');

    Route::get('residents/remove/family-member/{id}', 'Admin\MigrationController@removeFamilyMember');
    Route::resource('migrations', 'Admin\MigrationController');
    Route::resource('area', 'AreaController');
    Route::resource('sections', 'AreaSectionController');
    Route::resource('coarea', 'CoareaController');
    Route::get('developers', 'HomeController@auth_developer');
});


Route::group(['middleware' => ['auth', 'role:house_owner'], 'prefix' => 'house-owner'], function () {
    Route::get('dashboard', 'DashboardController@HouseOwnerDashboard')->name('HouseOwnerDashboard');
    Route::resource('residents', 'HouseOwner\ResidentController');
    Route::get('notice', 'NoticeController@indexHouse');
    Route::resource('residents', 'HouseOwner\ResidentController');
    Route::post('residents/add/family-member', 'HouseOwner\ResidentController@addFamilyMember');
    Route::get('residents/remove/family-member/{id}', 'HouseOwner\ResidentController@removeFamilyMember');
    Route::resource('family', 'HouseOwner\FamilyController');
    Route::resource('migrations', 'HouseOwner\MigrationController');
    // Route::get('developers', 'HomeController@auth_developer');

});


Route::get('get-section-by-area', 'AreaSectionController@getsectionbyarea')->name('getsectionbyarea');

Route::get('get-coarea', 'CoareaController@getcoarea')->name('getcoarea');
