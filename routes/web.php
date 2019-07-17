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

Route::get('/','MainController@pageLanding');

Route::get('/landing', 'MainController@pageLanding');

Route::get('/register', 'MainController@pageRegistration');

ROute::post('/register/insert', 'MainController@addMember');

Route::get('/home', 'MainController@pageHome');

Route::get('/login', 'MainController@pageLogin');
Route::get('/login/user', 'MainController@login');