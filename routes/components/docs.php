<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 7:44 PM
 * Email: fatkulnurk@gmail.com
 */

Route::group(['prefix' => 'docs'], function (){
    Route::get('/', function () {
        return view('docs.welcome');
    });

    Route::group(['prefix' => 'theme'], function (){
        Route::get('/', function (){
            return view('docs.theme.index');
        });
    });
});