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
    return view('home');
});

route::get('/auth/login', 'AuthController@index')->name('loginForm');
route::get('/auth/register', 'AuthController@register')->name('registerForm');
route::post('/login', 'AuthController@login')->name('login');
route::post('/register', 'AuthController@store')->name('register');
route::get('/logout', 'AuthController@logout')->name('logout');
