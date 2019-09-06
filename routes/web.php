<?php


Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('setfoo', 'AuthController@loginForm')->name('loginForm');
Route::post('setfoo', 'AuthController@login')->name('login');

Route::group(['middleware' => ['foo']], function () {
    
    Route::post('logout', 'AuthController@logout')->name('logout');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('post', 'PostController');
    Route::resource('categories', 'CategoriController');
});
