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
Route::get('/admin/category', 'admin\AdminController@viewCategoryAdd');
Route::post('/admin/add-category', 'admin\AdminController@saveNewCategory');
Route::get('/admin/delete-main-category/{id}', 'admin\AdminController@deleteMainCategory');
Route::post('/admin/data-category', 'admin\AdminController@getCategoryDataById');
Route::post('/admin/edit-data-category/{id}', 'admin\AdminController@editMainCategory');
