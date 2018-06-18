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
    Route::get('/test', 'Front\HomeController@test')->name('test');

    Route::get('/', 'Front\ReservationController@index')->name('home');
    Route::get('/app', 'Front\ReservationController@index')->name('home');

    Route::get('app/faq','Front\HomeController@faq')->name('faq');
    Route::get('app/contact','Front\HomeController@contact')->name('contact');
    Route::get('app/problem','Front\HomeController@problem')->name('problem');
    Route::post('app/problem/report/','Front\HomeController@reportProblem')->name('problem.report');

    //Reservation 
    Route::get('app/reservation/create/step1', 'Front\ReservationController@createStep1Location')->name('reservation.create.step1_location');
    Route::get('app/reservation/create/step2', 'Front\ReservationController@createStep2Type')->name('reservation.create.step2_type');
    Route::get('app/reservation/create/step3', 'Front\ReservationController@createStep3Device')->name('reservation.create.step3_device');
    Route::get('app/reservation/create/step4', 'Front\ReservationController@createStep4Confirm')->name('reservation.create.step4_confirm');
    Route::get('app/reservation/open/{reservation}', 'Front\ReservationController@open')->name('reservation.open');
    Route::get('app/reservation/opentest', 'Front\ReservationController@opentest')->name('reservation.opentest');
    Route::post('app/reservation/store', 'Front\ReservationController@store')->name('reservation.store');
    Route::get('app/reservation/clearunusedreservations', 'Front\ReservationController@clearUnusedReservations')->name('reservation.clearUnusedReservations');
    Route::get('app/reservation/cancel', 'Front\ReservationController@cancel')->name('reservation.cancel');
    Route::get('app/reservation/finishreservations', 'Front\ReservationController@finishReservations')->name('reservation.finishReservations');
    

    //Location
    Route::get('app/locations/getall', 'Front\LocationController@getAll')->name('reservation.getall');

    //device
    Route::get('app/devices/getdevice', 'Front\DeviceController@getDevice')->name('devices.getdevice');
    Route::get('app/devices/open/{device}', 'Front\DeviceController@open')->name('devices.open');
    Route::get('app/devices/run/{device}', 'Front\DeviceController@run')->name('devices.run');
    Route::get('app/devices/end/{device}', 'Front\DeviceController@end')->name('devices.end');

    //user
    Route::get('app/user/charge/', 'Front\UserController@openCharge')->name('user.charge.open');
    Route::post('app/user/charge/', 'Front\UserController@charge')->name('user.charge.create');
    Route::get('app/user/charge/history', 'Front\UserController@chargeHistory')->name('user.charge.history');
    Route::get('app/user/edit/', 'Front\UserController@edit')->name('user.edit');
    Route::post('app/user/update/', 'Front\UserController@update')->name('user.update');
    Route::post('app/user/password/update', 'Front\UserController@updatePassword')->name('user.password.update');
    Route::get('app/user/getaddress', 'Front\UserController@getAddress')->name('user.getAddress');
    Route::get('app/user/delete', 'Front\UserController@delete')->name('user.delete');

    //Tips & tricks
    Route::get('app/articles/index', 'Front\ArticleController@index')->name('articles.index');
    Route::get('app/articles/open/{article}', 'Front\ArticleController@open')->name('articles.open');
    Route::get('app/articles/addtofavorites/{article}', 'Front\ArticleController@addToFavorites')->name('articles.addToFavorites');
    Route::get('app/articles/removefromfavorites/{article}', 'Front\ArticleController@removeFromFavorites')->name('articles.removeFromFavorites');
    Route::get('app/articles/favorites', 'Front\ArticleController@favorites')->name('articles.favorites');

    Route::group(['middleware' => ['role:Administrator']], function () {
        Route::get('admin', 'Back\DeviceController@index')->name('admin.devices');
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
