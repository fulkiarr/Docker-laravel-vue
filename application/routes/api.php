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
Route::post('login', 'Module\MainController@login');
Route::post('checkauth', 'Module\MainController@checkauth');

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('logout', 'Module\MainController@logout');
    Route::get('/resources/log/', 'Module\MainController@logapi');
});
