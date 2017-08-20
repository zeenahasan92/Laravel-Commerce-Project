<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1', 'namespace' => '\Api\V1'], function () {

    Route::group(['prefix' => 'products'], function () {

      Route::get('/','ApiController@getProducts');

      Route::get('/get/{id}','ApiController@getProduct');

      Route::post('/search/name','ApiController@searchByName');

      Route::post('/search/price','ApiController@searchByPrice');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::post('login', 'ApiController@login');
        Route::post('register', 'ApiController@register');
    });

    Route::group(['prefix' => 'cart','middleware'=>'user.jwt'], function () {

        Route::post('/send', 'ApiController@placeOrder');
    });

});