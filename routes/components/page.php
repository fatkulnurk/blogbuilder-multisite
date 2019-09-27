<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 4:01 PM
 * Email: fatkulnurk@gmail.com
 */

Route::group(['prefix' => 'page'], function (){
    Auth::routes(['verify' => true]);

    Route::get('/logout', 'Auth\AuthBlogController@logout')->name('logout.please');
});