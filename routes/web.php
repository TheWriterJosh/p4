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

Route::resource('bucketlist', 'BucketlistController');
Route::get('/', 'BucketlistController@index');
Route::get('/index', 'BucketlistController@index');
Route::get('/create', 'BucketlistController@create');
Route::post('/', 'BucketlistController@store')->name('bucketlist.store');
Route::get('/bucketlist/{destination}', 'BucketlistController@show')->name('bucketlist.show');
Route::get('/{id}/edit', 'BucketlistController@edit')->name('bucketlist.edit');
Route::put('/{id}', 'BucketlistController@update')->name('bucketlist.update');
Route::delete('/bucketlist/{destination}', 'BucketlistController@destroy')->name('bucketlist.destroy');
