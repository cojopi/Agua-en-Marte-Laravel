<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\URGController@interface');

Route::get('/expedition', 'App\Http\Controllers\ExpeditionController@getNewExpedition');
Route::post('/expedition/explore', 'App\Http\Controllers\ExpeditionController@sendExpedition');
Route::post('/expedition/analyze', 'App\Http\Controllers\ExpeditionController@analyzeWater');
Route::put('/expedition/fix', 'App\Http\Controllers\ExpeditionController@fixExpedition');
Route::post('/expedition/url', 'App\Http\Controllers\ExpeditionController@setExpeditionURL');