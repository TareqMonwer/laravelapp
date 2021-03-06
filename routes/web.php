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


Route::name('frontend.')->namespace('Frontend')->group(function () {
    Route::get('/', 'MainController@welcome')->name('home');
    Route::get('post/', 'MainController@show')->name('show');
});

Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'AuthController@processRegistrationForm')->name('register');

Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@processLogin')->name('login');
