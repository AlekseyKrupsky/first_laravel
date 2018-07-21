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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();


Route::get('/home', 'HomeController@index');


Route::get('/goods','GoodsController@index')->name('goods');
Route::get('/goods/{id}','GoodsController@show');



Route::get('/photos','PhotosControllerRes@index')->name('photo');
Route::get('/photos/id/{id}','PhotosControllerRes@show')->name('photo');
Route::get('/photos/create','PhotosControllerRes@create');
Route::post('/photos','PhotosControllerRes@store');
Route::get('/photos/{id}/edit','PhotosControllerRes@edit');
Route::patch('/photos/{id}','PhotosControllerRes@update');
Route::delete('/photos/{id}','PhotosControllerRes@destroy');




Route::get('/create','GoodsController@create')->name('create');
Route::post('/goods','GoodsController@store');

///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/admin','Admin\AdminController@show')->name('admin');
Route::get('/admin/goods','Admin\GoodsController@index')->name('admin_goods');
Route::get('/admin/photos','Admin\PhotosController@index')->name('admin_photos');
Route::get('admin/goods/show/{id}','Admin\GoodsController@show');
Route::get('admin/photos/show/{id}','Admin\PhotosController@show');

Route::get('/admin/goods/create','Admin\GoodsController@create')->name('good_create');
Route::get('/admin/photos/create','Admin\PhotosController@create')->name('photo_create');

Route::post('/admin/goods/store','Admin\GoodsController@store');
Route::post('/admin/photos/store','Admin\PhotosController@store');

Route::get('/admin/goods/edit/{id}','Admin\GoodsController@edit');
Route::get('/admin/photos/edit/{id}','Admin\PhotosController@edit');

