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

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@store')->name('uploadTeam');

Route::get('/teams/{slug}', 'TeamsController@index')->name('teams');

Auth::routes();

