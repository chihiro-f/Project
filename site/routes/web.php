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

Route::get('/today', 'Today_scheduleController@show');
Route::get('/monthly_schedule', 'Monthly_scheduleController@show');
Route::get('/network', 'NetworkController@index');
Route::get('/record', 'RecordController@index');
Route::get('/user', 'UserController@index');