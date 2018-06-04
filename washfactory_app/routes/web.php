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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('faq','HomeController@faq')->name('faq');
    Route::get('contact','HomeController@contact')->name('contact');
    Route::get('problem','HomeController@problem')->name('problem');
    Route::post('problem/report/','HomeController@reportProblem')->name('problem.report');

    Route::get('reservation/create/step1', 'ReservationController@createStep1Location')->name('reservation.create.step1_location');
    Route::get('reservation/create/step3', 'ReservationController@createStep3Device')->name('reservation.create.step3_device');
    Route::get('reservation/open', 'ReservationController@open')->name('reservation.open');
    
    Route::get('user/charge/', 'UserController@openCharge')->name('user.charge.open');
    Route::post('user/charge/', 'UserController@charge')->name('user.charge.create');
    Route::get('user/charge/history', 'UserController@chargeHistory')->name('user.charge.history');
    Route::get('user/edit/', 'UserController@edit')->name('user.edit');
    Route::post('user/update/', 'UserController@update')->name('user.update');
    Route::post('user/password/update', 'UserController@updatePassword')->name('user.password.update');
});
