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

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/categories', 'CategoryController@index')->name('category_list');
    Route::get('/category', 'CategoryController@create')->name('category_create');
    Route::post('/category', 'CategoryController@store')->name('category_store');

    Route::get('/upload', 'UploadController@create');
    Route::post('/upload', 'UploadController@upload')->name('upload_image');
});


