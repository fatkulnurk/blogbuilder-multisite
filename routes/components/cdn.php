<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 4:04 PM
 * Email: fatkulnurk@gmail.com
 */

// Route For CDN
Route::group(['namespace' => 'ContentDelivery', 'prefix' => 'cdn'], function (){
    Route::get('/thumbnail/post/{id}', 'ImagesController@post')->name('content.images.thumbnail.post');
    Route::get('/thumbnail/user/{id}', 'ImagesController@user')->name('content.images.thumbnail.user');
    Route::get('/thumbnail/blog/{id}', 'ImagesController@blog')->name('content.images.thumbnail.blog');
});
