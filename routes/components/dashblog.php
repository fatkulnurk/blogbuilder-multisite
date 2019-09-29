<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 4:01 PM
 * Email: fatkulnurk@gmail.com
 */

Route::group(['namespace' => 'Dashblog', 'prefix' => 'dashblog'], function (){
    Route::get('/', 'HomeController@index')->name('dashblog');
});

// Route For Dashblog
Route::group(['namespace' => 'Dashblog', 'prefix' => 'dashblog/{blogid}', 'middleware' => ['auth', 'isOwnerBlog']], function () {
    Route::get('/', 'DashBlogController@index')->name('dashblog.index');

    Route::group(['prefix' => 'post'], function () {

        Route::get('/', 'PostController@index')->name('dashblog.post.index');
        Route::get('/create', 'PostController@create')->name('dashblog.post.create');
        Route::post('/', 'PostController@store')->name('dashblog.post.store');
        Route::get('/{id}/edit', 'PostController@edit')->name('dashblog.post.edit');
        Route::put('/{id}', 'PostController@update')->name('dashblog.post.update');
        Route::get('show/{id}', 'PostController@show')->name('dashblog.post.show');
        Route::delete('/{id}', 'PostController@destroy')->name('dashblog.post.destroy');

        Route::get('publish', 'PostPublishController@index')->name('dashblog.post-publish.index');
        Route::get('draft', 'PostDraftController@index')->name('dashblog.post-draft.index');
        Route::get('trash', 'PostTrashController@index')->name('dashblog.post-trash.index');
        Route::delete('trash-destroy/{id}', 'PostTrashController@destroy')->name('dashblog.post-trash.destroy');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@index')->name('dashblog.category.index');
        Route::get('/create', 'CategoryController@create')->name('dashblog.category.create');
        Route::post('/', 'CategoryController@store')->name('dashblog.category.store');
        Route::get('/{id}', 'CategoryController@show')->name('dashblog.category.show');
        Route::get('/{id}/edit', 'CategoryController@edit')->name('dashblog.category.edit');
        Route::put('/{id}', 'CategoryController@update')->name('dashblog.category.update');
        Route::delete('/{id}', 'CategoryController@destroy')->name('dashblog.category.destroy');

//        Route::get('trash', 'CategoryTrashController@index')->name('dashblog.category-trash.index');
//        Route::delete('trash-destroy/{id}', 'CategoryTrashController@destroy')->name('dashblog.category-trash.destroy');
    });

    Route::group(['prefix' => 'page'], function () {
        Route::get('/', 'PageController@index')->name('dashblog.page.index');
        Route::get('/create', 'PageController@create')->name('dashblog.page.create');
        Route::post('/', 'PageController@store')->name('dashblog.page.store');
        Route::get('/{id}', 'PageController@show')->name('dashblog.page.show');
        Route::get('/{id}/edit', 'PageController@edit')->name('dashblog.page.edit');
        Route::put('/{id}', 'PageController@update')->name('dashblog.page.update');
        Route::delete('/{id}', 'PageController@destroy')->name('dashblog.page.destroy');

        Route::get('publish', 'PagePublishController@index')->name('dashblog.page-publish.index');
        Route::get('draft', 'PageDraftController@index')->name('dashblog.page-draft.index');
        Route::get('trash', 'PageTrashController@index')->name('dashblog.page-trash.index');
        Route::delete('trash-destroy/{id}', 'PageTrashController@destroy')->name('dashblog.page-trash.destroy');
    });

    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', 'CommentController@index')->name('dashblog.comment.index');
        Route::put('/{id}', 'CommentController@update')->name('dashblog.comment.update');
        Route::delete('/{id}', 'CommentController@destroy')->name('dashblog.comment.destroy');

        Route::get('/publish', 'CommentPublishController@index')->name('dashblog.comment-publish.index');
        Route::get('/pending', 'CommentPendingController@index')->name('dashblog.comment-pending.index');
        Route::get('/trash', 'CommentTrashController@index')->name('dashblog.comment-trash.index');
        Route::delete('trash-destroy/{id}', 'CommentTrashController@destroy')->name('dashblog.comment-trash.destroy');

    });

    Route::group(['prefix' => 'theme', 'namespace' => 'Theme'], function (){
        Route::group(['prefix' => 'desktop'], function (){
            Route::get('/', 'ThemeDesktopController@index')->name('dashblog.theme.desktop.index');
            Route::get('/edit', 'ThemeDesktopController@edit')->name('dashblog.theme.desktop.edit');
            Route::post('/edit', 'ThemeDesktopController@update')->name('dashblog.theme.desktop.update');
        });

//       Route::group(['prefix' => 'mobile'], function (){
//           Route::get('/', 'ThemeMobileController@index')->name('dashblog.theme.mobile.index');
//       });
    });

    Route::group(['prefix' => 'setting'], function (){
        Route::get('/', 'InformationBlogController@edit')->name('dashblog.setting.information.edit');
        Route::post('/', 'InformationBlogController@update')->name('dashblog.setting.information.update');
        Route::get('theme', 'SettingThemeController@edit')->name('dashblog.setting.theme.edit');
        Route::post('theme', 'SettingThemeController@update')->name('dashblog.setting.theme.update');
        Route::get('blog', 'SettingBlogController@edit')->name('dashblog.setting.blog.edit');
        Route::post('blog', 'SettingBlogController@update')->name('dashblog.setting.blog.update');
    });
});
