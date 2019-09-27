<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 3:55 PM
 * Email: fatkulnurk@gmail.com
 */

Route::group(['prefix' => 'chat', 'namespace' => 'Chatting'], function (){
   Route::get('/', 'HomeController@index');
});