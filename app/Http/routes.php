<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WebController@getIndex');


Route::post('compress', 'CompressionController@compress');
Route::get('compress', 'CompressionController@compress');
Route::group(['middleware' => ['web']], function () {
    //
});
