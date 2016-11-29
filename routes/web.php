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


Route::get('/', 'BucketlistController@index')->name('bucketlist.index');
Route::get('/{id}', 'BucketlistController@show')->name('bucketlist.show');
Route::get('/bucketlist/create', 'BucketlistController@create')->name('bucketlist.create');
Route::post('/', 'BucketlistController@store')->name('bucketlist.store');
Route::get('/{id}/edit', 'BucketlistController@edit')->name('bucketlist.edit');
Route::put('/{id}', 'BucketlistController@update')->name('bucketlist.update');
Route::get('/{id}/delete', 'BucketlistController@delete')->name('bucketlist.destroy');
Route::delete('/{id}', 'BucketlistController@destroy')->name('bucketlist.destroy');
