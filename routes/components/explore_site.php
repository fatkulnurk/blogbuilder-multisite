<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 4:06 PM
 * Email: fatkulnurk@gmail.com
 */

// blog
Route::group(['prefix' => 'blog', 'namespace' => 'BlogCatalog'], function (){

    Route::get('/', 'HomeController@index')->name('public.blog.index');
    Route::get('/category', 'CategoryController@index')->name('public.blog.category');
    Route::get('/category/{categoryid}', 'CategoryController@show')->name('public.blog.category.show');
    Route::get('/top', function (){})->name('public.blog.top');

    Route::group(['prefix' => 'topics'], function (){
        Route::get('/', 'PostController@index')->name('public.topics.index');

        Route::get('/{categoryBlogName}', 'PostController@show')->name('public.topics.show');
    });

    // post by label
    Route::group(['prefix' => 'label'], function (){
        Route::get('/', function () {

        });
        Route::get('/{label}', function () {

        });
    });

});
// searcg
Route::group(['namespace' => 'Search'], function (){

    Route::get('search', 'SearchController@index')->name('public.search');

    Route::group(['prefix' => 'chatting'], function (){
        Route::get('/', function () {

        })->name('public.chatting.index');
    });
});


// user detail in public
Route::group(['prefix' => 'user', 'namespace' => 'User'], function (){
    Route::get('/{username}', 'UserController@profile')->name('public.profile');
});

// user detail in public
Route::group(['prefix' => 'donation', 'namespace' => 'Donation'], function (){
    Route::get('/', 'DonationController@index')->name('public.donation.index');
});
