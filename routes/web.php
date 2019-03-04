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
//Route::domain('{account}.dibumi.com')->group(function () {
//    Route::get('user/{id}', function ($account, $id) {
//        return "hahahaha";
//    });
//});

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
        Route::get('/profile', 'AccountController@edit')->name('dashboard.account.profile');
        Route::get('/password', 'AccountController@index')->name('dashboard.account.password');
    });
});


// Route For Dashblog
Route::group(['namespace' => 'Dashblog', 'prefix' => 'dashblog/{blogid}', 'middleware' => ['auth', 'isOwnerBlog']], function () {
    Route::get('/', 'DashBlogController@index')->name('dashblog.index');

    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'PostController@index')->name('dashblog.post.index');
        Route::get('/create', 'PostController@create')->name('dashblog.post.create');
        Route::post('/', 'PostController@store')->name('dashblog.post.store');
        Route::get('/{id}', 'PostController@show')->name('dashblog.post.show');
        Route::get('/{id/edit}', 'PostController@edit')->name('dashblog.post.edit');
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

//    Route::group(['prefix' => ''], function () {
//        Route::get('/', 'Controller@')->name('dashblog..index');
//        Route::get('/', 'Controller@')->name('dashblog..add');
//    });
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/lfm', function () {
    return view('laravel-fm');
});