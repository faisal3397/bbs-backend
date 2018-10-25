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

Route::get('/', 'DonorsController@index')->name('home');

Route::get('/donors/{donor}', 'DonorsController@show');

Route::get('/signup', 'RegistrationController@create');

Route::post('/signup', 'RegistrationController@store');

Route::get('/signin', 'SessionsController@create');






 
