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
    return view('welcome');
});

Route::group(['prefix' => 'page'], function (){
    Auth::routes(['verify' => true]);
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


// Route for dashboard
Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'BlogController@index')->name('dashboard.blog.index');
        Route::get('/add', 'BlogController@create')->name('dashboard.blog.add');
    });

    Route::group(['prefix' => 'chatroom'], function () {
        Route::get('/', 'ChatRoomController@index')->name('dashboard.chatroom.index');
    });

    Route::group(['prefix' => 'chat'], function () {
        Route::get('/', 'ChatController@index')->name('dashboard.chat.index');
        Route::get('/{id}', 'ChatController@show')->name('dashboard.chat.show');
    });

    Route::group(['prefix' => 'notification'], function () {
        Route::get('/', 'NotificationController@index')->name('dashboard.notification.index');
        Route::get('/{id}', 'NotificationController@show')->name('dashboard.notification.show');
    });

    Route::group(['prefix' => 'account'], function () {
        Route::get('/', 'AccountController@index')->name('dashboard.account.index');
        Route::get('/profile', 'AccountController@edit')->name('dashboard.account.profile');
        Route::get('/password', 'AccountController@index')->name('dashboard.account.password');
    });
});

