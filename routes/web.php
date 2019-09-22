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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', 'AuthController@getLogin')->middleware('guest');
Route::post('/login', 'AuthController@postLogin')->middleware('guest')->name('login');
Route::get('/register', 'AuthController@getRegister')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest')->name('register');

Route::get('/home', function() {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');
