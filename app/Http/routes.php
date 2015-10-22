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
Route::group(['prefix' => 'treatment'], function()
{
    Route::get('acupuncture', function()
    {
        return view('acupuncture');
    });
	Route::get('chinese herbal medicine', function()
    {
        return view('chineseHerbalMedicine');
    });
	Route::get('therapeutic massage', function()
    {
        return view('therapeuticMassage');
    });
});
Route::get('/fertility', 'PageController@fertility');
Route::group(['prefix' => 'fertility'], function()
{
    Route::get('IVF support', function()
    {
        return view('ivfSupport');
    });
	Route::get('Natural Fertility Support', function()
    {
        return view('naturalFertilitySupport');
    });
	Route::get('Miscarriage Prevention', function()
    {
        return view('miscarriagePrevention');
    });
	Route::get('Pregnancy Care', function()
    {
        return view('pregnancyCare');
    });
});
Route::group(['prefix' => 'generalHealth'], function()
{
    Route::get('Womens Health', function()
    {
        return view('womensHealth');
    });
	Route::get('Pain Management', function()
    {
        return view('painManagement');
    });
	Route::get('Skin Issues', function()
    {
        return view('skinIssues');
    });
	Route::get('Mental Disorders', function()
    {
        return view('mentalDisorders');
    });
	Route::get('Digestive Disorders', function()
    {
        return view('digestiveDisorders');
    });
	Route::get('Respiratory Disorders', function()
    {
        return view('respiratoryDisorders');
    });
});

Route::get('/general', 'PageController@general');
Route::get('/fees', 'PageController@fees');
Route::get('/contact', 'PageController@contact');
Route::post('sendingMessage', 'PageController@email');

Route::get('/blogs', 'BlogController@index');
Route::get('/blog/{id}',['as'=>'blogDetail','uses'=>'BlogController@show']);
Route::get('/blog/{id}/update','BlogController@edit');
Route::get('createBlog', 'blogController@create');
Route::post('add_new_post',['as'=>'add_new_post','uses'=>'BlogController@store']);
Route::get('adminPanel','BlogController@panel');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

