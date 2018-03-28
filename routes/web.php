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

Route::get('/', function () {
    return view('layout/template');
});

Route::get('/artwork', function() {
    return view('layout/template');
});

Route::post('/artworks', function() {
    return [
        'data' => 'data'
    ];
})->middleware(['web']);

Route::get('/blog', function() {
   return view('layout/template');
});

Route::post('/blogs', function() {
    return [
        'data' => 'data'
    ];
})->middleware(['web']);

Route::get('/blog/{category}', function($category) {
    return view('layout/template', compact('category'));
});

Route::get('/jobs', function() {
    return view('layout/template');
});

Route::post('/jobs', function() {
    return [
        'data' => 'data'
    ];
})->middleware(['web']);

Route::get('/search', function() {
    return view('layout/template');
});
Route::get('/work', function() {
    return view('layout/template');
})->middleware('auth');


Route::post('/upload/{hash}', 'HomeController@upload');

Route::get('/forum', function() {
    return view('layout/template');
});

Route::post('/search', function() {
    return [
        'data' => 'data'
    ];
})->middleware(['web']);


Auth::routes();

Route::get('/login', function () {
    return view('layout/template');
})->middleware(['guest'])->name('login');

Route::get('/register', function() {
    return view ('layout/template');
})->middleware(['guest']);

Route::get('/isLoggedIn', 'HomeController@isLoggedIn');

Route::get('/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
Route::get('/country', 'HomeController@country');

/* Social handler */

Route::get('/facebook/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/facebook/callback', 'SocialAuthFacebookController@callback');

Route::post('/facebook/auth', 'SocialAuthFacebookController@auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
