<?php

Route::get('/', 'LoginController@showLoginForm')->name('login');

Route::group(['prefix' => 'auths', 'middleware' => []], function () {
    Route::post('/login', 'LoginController@login')->name('login.post');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});