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
    Route::get('/', 'Front\ReservationController@index')->name('home');

    Route::get('faq','Front\HomeController@faq')->name('faq');
    Route::get('contact','Front\HomeController@contact')->name('contact');
    Route::get('problem','Front\HomeController@problem')->name('problem');
    Route::post('problem/report/','Front\HomeController@reportProblem')->name('problem.report');

    //Reservation 
    Route::get('reservation/create/step1', 'Front\ReservationController@createStep1Location')->name('reservation.create.step1_location');
    Route::get('reservation/create/step2', 'Front\ReservationController@createStep2Type')->name('reservation.create.step2_type');
    Route::get('reservation/create/step3', 'Front\ReservationController@createStep3Device')->name('reservation.create.step3_device');
    Route::get('reservation/create/step4', 'Front\ReservationController@createStep4Confirm')->name('reservation.create.step4_confirm');
    Route::get('reservation/open', 'Front\ReservationController@open')->name('reservation.open');

    //Location
    Route::get('locations/getall', 'Front\LocationController@getAll')->name('reservation.getall');

    Route::get('user/charge/', 'Front\UserController@openCharge')->name('user.charge.open');
    Route::post('user/charge/', 'Front\UserController@charge')->name('user.charge.create');
    Route::get('user/charge/history', 'Front\UserController@chargeHistory')->name('user.charge.history');
    Route::get('user/edit/', 'Front\UserController@edit')->name('user.edit');
    Route::post('user/update/', 'Front\UserController@update')->name('user.update');
    Route::post('user/password/update', 'Front\UserController@updatePassword')->name('user.password.update');
    Route::get('user/getaddress', 'Front\UserController@getAddress')->name('user.getAddress');

    Route::group(['middleware' => ['role:Administrator']], function () {
        Route::get('admin/devices', 'Back\DeviceController@index')->name('admin.devices');
        Route::get('admin/devices/create', 'Back\DeviceController@create')->name('admin.devices.create');
        Route::post('admin/devices/store', 'Back\DeviceController@store')->name('admin.devices.store');
        Route::get('admin/devices/{device}/edit', 'Back\DeviceController@edit')->name('admin.devices.edit');
        Route::put('admin/devices/{device}', 'Back\DeviceController@update')->name('admin.devices.update');
        Route::delete('admin/devices/{device}', 'Back\DeviceController@destroy')->name('admin.devices.destroy');

        Route::get('admin/locations', 'Back\LocationController@index')->name('admin.locations');
        Route::get('admin/locations/create', 'Back\LocationController@create')->name('admin.locations.create');
        Route::post('admin/locations/store', 'Back\LocationController@store')->name('admin.locations.store');
        Route::get('admin/locations/{location}/edit', 'Back\LocationController@edit')->name('admin.locations.edit');
        Route::put('admin/locations/{location}', 'Back\LocationController@update')->name('admin.locations.update');
        Route::delete('admin/locations/{location}', 'Back\LocationController@destroy')->name('admin.locations.destroy');

        Route::get('admin/users', 'Back\UserController@index')->name('admin.users');
        Route::get('admin/users/{user}/edit', 'Back\UserController@edit')->name('admin.users.edit');
        Route::put('admin/users/{user}', 'Back\UserController@update')->name('admin.users.update');
        Route::delete('admin/users/{user}', 'Back\UserController@destroy')->name('admin.users.destroy');

        Route::get('admin/articles', 'Back\ArticleController@index')->name('admin.articles');
        Route::get('admin/articles/create', 'Back\ArticleController@create')->name('admin.articles.create');
        Route::post('admin/articles/store', 'Back\ArticleController@store')->name('admin.articles.store');
        Route::get('admin/articles/{article}/edit', 'Back\ArticleController@edit')->name('admin.articles.edit');
        Route::put('admin/articles/{article}', 'Back\ArticleController@update')->name('admin.articles.update');
        Route::delete('admin/articles/{article}', 'Back\ArticleController@destroy')->name('admin.articles.destroy');
    });
});
