<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//app routes
Route::get('/', 'BucketlistController@index')->name('bucketlist.index');
Route::get('/{id}', 'BucketlistController@show')->name('bucketlist.show');
Route::get('/bucketlist/create', 'BucketlistController@create')->name('bucketlist.create')->middleware('auth');
Route::post('/', 'BucketlistController@store')->name('bucketlist.store');
Route::get('/{id}/edit', 'BucketlistController@edit')->name('bucketlist.edit');
Route::put('/{id}', 'BucketlistController@update')->name('bucketlist.update');
Route::get('/{id}/delete', 'BucketlistController@delete')->name('bucketlist.destroy');
Route::delete('/{id}', 'BucketlistController@destroy')->name('bucketlist.destroy');
Route::get('/home', 'HomeController@index');

//authentication routes
Route::get('/auth/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/auth/login', 'Auth\LoginController@login');
Route::get('/auth/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes
Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/auth/register', 'Auth\RegisterController@register');

// Password Reset Routes
Route::get('/auth/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('/auth/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/auth/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('/auth/password/reset', 'Auth\ResetPasswordController@reset');

//testroute
Route::get('/auth/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user)
        dump($user->toArray());
    else
        dump('You are not logged in.');

    return;
});
