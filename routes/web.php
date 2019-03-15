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



Route::group(['prefix' => 'page'], function (){
    Auth::routes(['verify' => true]);
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// Route for blog
//Route::group(['domain' => '{username}.{domain}.{tld}'], function(){
//    Route::get('/', function (\Illuminate\Http\Request $request, $username = null, $domain = null, $tld = null) {
//
//        echo 'halo '.$username.' dengan domain '.$domain.'.'.$tld.' '.$request->getHost();
//    });
Route::group(['domain' => '{subdomain}.dibumi.com', 'namespace' => 'Blog'], function(){

    Route::get('/', 'BlogController@index')->name('blog.index');

    Route::get('/{slug}', 'BlogController@show')->name('blog.show');

    Route::get('/category/{slug}', function () {

    });

    Route::get('/search/', function () {

    });
});

// Route for dashboard
Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'BlogController@index')->name('dashboard.blog.index');
        Route::get('/add', 'BlogController@create')->name('dashboard.blog.add');
        Route::post('/add', 'BlogController@store')->name('dashboard.blog.store');
    });

    Route::group(['prefix' => 'chatroom'], function () {
        Route::get('/', 'ChatRoomController@index')->name('dashboard.chatroom.index');
    });

    Route::group(['prefix' => 'chat'], function () {
        Route::get('/', 'ChatController@index')->name('dashboard.chat.index');
        Route::get('/{id}', 'ChatController@show')->name('dashboard.chat.show');
    });

    Route::group(['prefix' => 'notification'], function () {
        Route::get('/', 'NotificationController@index')->name('dashboard.notification.index');
        Route::get('/{id}', 'NotificationController@show')->name('dashboard.notification.show');
    });

    Route::group(['prefix' => 'account'], function () {
        Route::get('/', 'AccountController@index')->name('dashboard.account.index');
        Route::get('/email', 'EmailController@edit')->name('dashboard.account.email');
        Route::put('/email', 'EmailController@update')->name('dashboard.account.email.update');
        Route::get('/profile', 'AccountController@edit')->name('dashboard.account.profile');
        Route::put('/profile', 'AccountController@update')->name('dashboard.account.profile.update');
        Route::get('/password', 'PasswordController@edit')->name('dashboard.account.password');
        Route::put('/password', 'PasswordController@update')->name('dashboard.account.password.update');
    });
});

// Route For CDN
Route::group(['namespace' => 'ContentDelivery', 'prefix' => 'cdn'], function (){
    Route::get('/thumbnail/post/{id}', 'ImagesController@post')->name('content.images.thumbnail.post');
    Route::get('/thumbnail/user/{id}', 'ImagesController@user')->name('content.images.thumbnail.user');
});

// Route For Dashblog
Route::group(['namespace' => 'Dashblog', 'prefix' => 'dashblog/{blogid}', 'middleware' => ['auth', 'isOwnerBlog']], function () {
    Route::get('/', 'DashBlogController@index')->name('dashblog.index');

    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'PostController@index')->name('dashblog.post.index');
        Route::get('/create', 'PostController@create')->name('dashblog.post.create');
        Route::post('/', 'PostController@store')->name('dashblog.post.store');
        Route::get('/{id}', 'PostController@show')->name('dashblog.post.show');
        Route::get('/{id}/edit', 'PostController@edit')->name('dashblog.post.edit');
        Route::put('/{id}', 'PostController@update')->name('dashblog.post.update');
        Route::delete('/{id}', 'PostController@destroy')->name('dashblog.post.destroy');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@index')->name('dashblog.category.index');
        Route::get('/create', 'CategoryController@create')->name('dashblog.category.create');
        Route::post('/', 'CategoryController@store')->name('dashblog.category.store');
        Route::get('/{id}', 'CategoryController@show')->name('dashblog.category.show');
        Route::get('/{id}/edit', 'CategoryController@edit')->name('dashblog.category.edit');
        Route::put('/{id}', 'CategoryController@update')->name('dashblog.category.update');
        Route::delete('/{id}', 'CategoryController@destroy')->name('dashblog.category.destroy');
    });

    Route::group(['prefix' => 'page'], function () {
        Route::get('/', 'PageController@index')->name('dashblog.page.index');
        Route::get('/create', 'PageController@create')->name('dashblog.page.create');
        Route::post('/', 'PageController@store')->name('dashblog.page.store');
        Route::get('/{id}', 'PageController@show')->name('dashblog.page.show');
        Route::get('/{id}/edit', 'PageController@edit')->name('dashblog.page.edit');
        Route::put('/{id}', 'PageController@update')->name('dashblog.page.update');
        Route::delete('/{id}', 'PageController@destroy')->name('dashblog.page.destroy');
    });

    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', 'CommentController@index')->name('dashblog.comment.index');
        Route::get('/spam', 'CommentController@create')->name('dashblog.comment.spam');
    });
});

// ------------------- ROUTE PUBLIC----------------------- //

// landing page
Route::get('/', 'LandingController@index')->name('homepage');

// Namespace ExploreSite
Route::group(['namespace' => 'ExploreSite'], function (){

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

    Route::group(['prefix' => 'forum'], function (){
        Route::get('/', function () {

        })->name('public.forum.index');
    });

    Route::group(['prefix' => 'chatting'], function (){
        Route::get('/', function () {

       })->name('public.chatting.index');
    });
});

// testing
Route::get('/lfm', function () {
    return view('laravel-fm');
});