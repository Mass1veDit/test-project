<?php

Route::group(['prefix' => 'auths', 'middleware' => []], function () {
    Route::post('/login', 'Api\LoginController@login')->name('api.auths.login');
    Route::middleware('auth:api')->post('logout', 'Api\LoginController@logout')->name('api.auths.logout');
});

//Route::middleware('auth:api')->post('logout', 'Api\LoginController@logout');