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
Route::get('/', function() {
    return view('welcome');
});


Route::get('/top', 'Today_scheduleController@index');
Route::get('/today/create','Today_scheduleController@create');
Route::get('/today/{today_schedule}/edit','Today_scheduleController@edit');
Route::get('/today/{today_schedule}', 'Today_scheduleController@show');
Route::post('/today', 'Today_scheduleController@store');
Route::put('/today/{today_schedule}','Today_scheduleController@update');

// Route::get('/monthly_schedule/{monthly_schedule}/edit','Monthly_scheduleController@edit');
// Route::put('/monthly_schedule/{monthly_schedule}','Monthly_scheduleController@update');
// Route::get('/monthly_schedule/{monthly_schedule}', 'Monthly_scheduleController@show');
Route::get('/monthly_schedule/edit','Monthly_scheduleController@edit');
Route::put('/monthly_schedule','Monthly_scheduleController@update');
Route::get('/monthly_schedule', 'Monthly_scheduleController@show');

Route::get('/network', 'NetworkController@index');
Route::get('/network/create','NetworkController@create');
Route::get('/network/{network}', 'NetworkController@show');
Route::post('/network', 'NetworkController@store');

Route::get('/record', 'RecordController@index');
Route::get('/user', 'UserController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
