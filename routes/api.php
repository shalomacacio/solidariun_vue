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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix'=>'campanha'],function(){
    Route::get('/list', 'CampanhaController@list');
    Route::post('/store', 'CampanhaController@store');
});

Route::get('files/create', 'FileEntriesController@create');
Route::post('files/upload-file', 'FileEntriesController@uploadFile');
