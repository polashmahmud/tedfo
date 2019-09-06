<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('setfoo', 'AuthController@loginForm')->name('loginForm');
Route::post('setfoo', 'AuthController@login')->name('login');
Route::post('logout', 'AuthController@logout')->name('logout');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('post', 'PostController');
Route::resource('categories', 'CategoriController');

