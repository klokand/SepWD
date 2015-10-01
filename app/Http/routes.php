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

Route::get('/', 'PageController@index');
Route::get('/practitioners', 'PageController@practitioners');
Route::get('/treatment', 'PageController@treatment');
Route::get('/fertility', 'PageController@fertility');
Route::get('/general', 'PageController@general');
Route::get('/blog', 'PageController@blog');
Route::get('/blog/{id}',['as'=>'blogDetail','uses'=>'PageController@blogDetail']);
Route::get('/fees', 'PageController@fees');
Route::get('/contact', 'PageController@contact');
