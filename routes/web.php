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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>['auth']], function ()
{
	Route::get('/home', 'HomeController@index')->name('home');

	// Writters exclusive routes
	Route::group(['middleware'=>['web', 'CheckWritePermission']], function ()
	{
		Route::resource('tissues', 'TissueController')->except(['index', 'show']);
		Route::resource('muscles', 'MuscleController')->except(['index', 'show']);
		Route::resource('bones', 'BoneController')->except(['index', 'show']);
		Route::resource('tissue_types', 'TissueTypeController')->except(['index', 'show']);
		Route::resource('zones', 'ZoneController')->except(['index', 'show']);
		Route::resource('groups', 'GroupController');
	});

	// "Public" tissues views
	Route::get('/tissues', 'TissueController@index')->name('tissues');
	Route::get('/tissues/{tissue}', 'TissueController@show');

	// "Public" bones routes
	Route::get('/bones', 'BoneController@index')->name('bones');
	Route::get('/bones/{id}', 'BoneController@show');

	// "Public" muscle routes
	Route::get('/muscles', 'MuscleController@index')->name('muscles');
	Route::get('/muscles/{id}', 'MuscleController@show');

	// "Public" muscle routes
	Route::get('/tissue_types', 'TissueTypeController@index')->name('tissue_types');
	Route::get('/tissue_types/{tissueType}', 'TissueTypeController@show');

	// "Public" zone routes
	Route::get('/zones', 'TissueTypeController@index')->name('zones');
	Route::get('/zones/{zone}', 'TissueTypeController@show');

	Route::get('/profile', 'ProfileController@show');
});