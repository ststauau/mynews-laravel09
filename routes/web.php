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


Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});


/* Laravel 09 課題 */

Route::group(['prefix' => 'profile'], function() {
    Route::get('admin/profile/create', 'profile\AdminController@add');
    Route::get('admin/profile/edit', 'profile\AdminController@edit');    
});
