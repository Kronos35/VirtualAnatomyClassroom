<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'Api\ApiController@register');
Route::middleware('auth:api')->get('/logout', 'Api\ApiController@logout');
Route::middleware('auth:api')->post('/update', 'Api\ApiController@update');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user()->toJson();
});

Route::get('muscles','Api\MuscleController@index');
Route::get('bones','Api\BoneController@index');
Route::resource('tissues','Api\TissueController')->only('index','show');
Route::resource('tissue-types','Api\TissueTypeController')->only('index','show');
