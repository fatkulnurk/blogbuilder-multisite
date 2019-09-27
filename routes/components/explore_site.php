<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 4:06 PM
 * Email: fatkulnurk@gmail.com
 */


// Namespace ExploreSite
Route::group(['namespace' => 'ExploreSite'], function (){

    Route::get('search', 'SearchController@index')->name('public.search');

    // post by category
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

    // user detail in public
    Route::group(['prefix' => 'user'], function (){
        Route::get('/{username}', 'UserController@profile')->name('public.profile');
    });

    // directory blog
    Route::group(['prefix' => 'blog'], function (){
        Route::get('/', function (){})->name('public.blog.index');
        Route::get('/category', function (){})->name('public.blog.category');
        Route::get('/category/{categoryid}', function (){})->name('public.blog.category.index');
        Route::get('/top', function (){})->name('public.blog.top');
    });

    Route::group(['prefix' => 'chatting'], function (){
        Route::get('/', function () {

        })->name('public.chatting.index');
    });
});
