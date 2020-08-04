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

Route::get('/index','Taskcontroller@index')->middleware('auth');
Route::get('/index/{id}','Taskcontroller@show')->middleware('auth');
Route::get('/edit','Taskcontroller@edit')->middleware('auth');
Route::post('/edit','Taskcontroller@post')->middleware('auth');
Route::get('/index/{id}/update_page','Taskcontroller@update_page')->middleware('auth');
Route::post('/index/{id}/update_page','Taskcontroller@update')->middleware('auth');
Route::delete('/index/{id}','Taskcontroller@destoroy_page')->middleware('auth');
Route::get('/test','Taskcontroller@test')->middleware('auth');

Auth::routes();

Route::get('/auth', 'HomeController@index')->name('home');
