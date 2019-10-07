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

require_once __DIR__ . '/features/blog.php';
require_once __DIR__ . '/features/forum.php';
require_once __DIR__ . '/features/chat.php';

require_once __DIR__. '/components/dashboard.php';
require_once __DIR__. '/components/dashblog.php';
require_once __DIR__.'/components/page.php';
require_once __DIR__.'/components/cdn.php';

Route::group([
    'prefix' => 'group',
    'namespace' => 'Group',
    'as' => 'group.'
], function (){
    Route::get('/', 'HomeController@index')->name('index');
});

Route::group([
    'prefix' => 'meme',
    'namespace' => 'Meme',
    'as' => 'meme.'
], function (){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/{id}', 'HomeController@show')->name('show');

    Route::resource('manage', 'ManageController')->middleware('auth');
});

Route::group([
    'prefix' => 'lyrics',
    'namespace' => 'Lyrics',
    'as' => 'lyrics'
], function (){
    Route::get('/', 'HomeController@index')->name('.index');
});

// landing page
Route::get('/', 'LandingController@index')->name('homepage');
Route::get('/crawl', 'Statistic\Crawl@index')->name('crawl');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

require_once __DIR__.'/components/explore_site.php';
require_once __DIR__.'/components/docs.php';

Route::get('/test', function () {
    return \Illuminate\Support\Facades\Auth::user()->userRoles;
})->middleware('role:user');

// Admin panel
Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'as' => 'admin',
//    'middleware' => ['role:user']
], function (){
    Route::get('/', 'HomeController@index')->name('.index');

    Route::group([
        'prefix' => 'roles',
        'as' => '.roles'
    ], function (){
        Route::get('/', 'RolesController@index')->name('.index');
        Route::get('/{id}/edit', 'RolesController@edit')->name('.edit');
        Route::put('/{id}', 'RolesController@update')->name('.update');
        Route::delete('/{id}', 'RolesController@destroy')->name('.destroy');
    });

    Route::group([
        'prefix' => 'user-roles',
        'as' => '.user-roles'
    ], function (){
        Route::get('/', 'UserRolesController@index')->name('.index');
        Route::get('/{id}/edit', 'UserRolesController@edit')->name('.edit');
        Route::put('/{id}', 'UserRolesController@update')->name('.update');
        Route::delete('/{id}', 'UserRolesController@destroy')->name('.destroy');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
