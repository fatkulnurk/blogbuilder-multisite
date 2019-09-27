<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 1:55 PM
 * Email: fatkulnurk@gmail.com
 */
/***
 * Routing For Forum
 *
 * /forum/
 * /forum/{slug-forum}
 * /forum/{slug-forum}/?page={number}
 * /forum/category
 * /forum/category/{slug-category}
 * /forum/manage
 * /forum/manage/create
 * /forum/manage/{id}/edit
 * /forum/manage/{id} method put
 * /forum/manage/{id} methot delete
 ***/
Route::group(['prefix' => 'forum', 'namespace' => 'forum'], function (){
    Route::get('/', 'HomeController@index')->name('public.forum.index');
});