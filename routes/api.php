<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function () {
    return response()->json([
        'message'   => 'Api belum jadi *^_^*'
    ]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Public

// Local
Route::group(['namespace' => 'Api\Local', 'prefix' => 'local'], function (){
    Route::group(['prefix' => 'post'], function (){
        Route::get('/', 'PostController@index')->name('api.local.post.index');
    });
});
