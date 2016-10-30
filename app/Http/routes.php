<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

/**
 * Admin routes
 */
Route::get('/admin', 'admin\AdminController@index');
Route::get('/admin/add-photo', 'admin\AdminController@viewUploadImg');
Route::post('/admin/upload-photo', 'admin\AdminController@uploadImgForSlider');
Route::get('/admin/delete-photo-slider/{id}', 'admin\AdminController@deleteImgForSlider');
