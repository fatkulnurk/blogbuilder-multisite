<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 4:01 PM
 * Email: fatkulnurk@gmail.com
 */


// Route for dashboard
Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'BlogController@index')->name('dashboard.blog.index');
        Route::get('/add', 'BlogController@create')->name('dashboard.blog.add');
        Route::post('/add', 'BlogController@store')->name('dashboard.blog.store');
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
        Route::get('/email', 'EmailController@edit')->name('dashboard.account.email');
        Route::put('/email', 'EmailController@update')->name('dashboard.account.email.update');
        Route::get('/profile', 'AccountController@edit')->name('dashboard.account.profile');
        Route::put('/profile', 'AccountController@update')->name('dashboard.account.profile.update');
        Route::get('/password', 'PasswordController@edit')->name('dashboard.account.password');
        Route::put('/password', 'PasswordController@update')->name('dashboard.account.password.update');
    });
});
