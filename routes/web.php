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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', 'AuthController@getRegister');
Route::post('/register', 'AuthController@postRegister')->name('register');
Route::get('/Login', 'AuthController@getLogin');
Route::post('/Login', 'AuthController@postLogin')->name('login');

