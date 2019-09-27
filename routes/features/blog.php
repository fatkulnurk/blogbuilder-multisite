<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 3:56 PM
 * Email: fatkulnurk@gmail.com
 */

Route::group([
    'domain' => '{subdomain}.dibumi.com',
    'namespace' => 'Blog',
    'where' => [
        'subdomain' => '[A-Za-z0-9-]+'
    ]
], function(){

    Route::get('/home', function () {
        die('masih ada bug');
        return redirect()->back();
    });

    Route::get('/dashboard', function () {
        return redirect()->back();
    });

    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('style.css', 'staticController@styleCss')->name('blog.css');
    Route::get('main.js', 'staticController@mainJs')->name('blog.javascript');

    Route::get('index.html', 'BlogController@index')->name('blog.index');

    Route::get('/{slug}', 'BlogController@show')
        ->name('blog.show')
        ->where('slug', '[-a-zA-Z-0-9]+');

    Route::get('/page/{slug}', 'BlogController@showPage')
        ->name('blog.show-page');

    Route::post('/{slug}', 'CommentController@store')
        ->name('blog.store-comment')
        ->middleware('auth');

    Route::get('/category/{slug}', 'CategoryController@show')
        ->name('blog.category');

    Route::get('/search/','BlogSearchController@index')
        ->name('search');

});
