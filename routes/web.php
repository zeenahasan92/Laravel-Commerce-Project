<?php
//----------------------------------------------------------------------------
Route::get('/', 'FrontController@index');
//----------------------------------------------------------------------------
Auth::routes();
//----------------------------------------------------------------------------
Route::get('/products/json', 'FrontController@getProducts');

Route::get('/products/auto', 'FrontController@autoComplete');

Route::get('/product/view/{product}', 'FrontController@getProduct');
//----------------------------------------------------------------------------
Route::get('/search/name', 'FrontController@searchByName');

Route::get('/search/price', 'FrontController@searchByPrice');
//----------------------------------------------------------------------------
Route::group(['middleware' => 'auth'],function (){

    Route::get('/logout', 'FrontController@logout');

    Route::get('/home', 'FrontController@goToHome')->name('home');
});
//----------------------------------------------------------------------------
Route::group(['prefix' => 'cart', 'middleware' => 'auth'], function () {

    /*
    |--------------------------------------------------------------------------
    | FrontController - Cart (get,placeOrder,addToCart,deleteFromCart)
    |--------------------------------------------------------------------------
    */
    Route::get('/', 'FrontController@getCart');

    Route::post('send', 'FrontController@placeOrder')->name('placeOrder');

    Route::get('add/{product}', 'FrontController@addToCart');

    Route::get('delete/{id}', 'FrontController@deleteFromCart');
});
//----------------------------------------------------------------------------
Route::group(['prefix' => 'admin', 'middleware' => 'admin.middleware'], function () {

    /*
    |--------------------------------------------------------------------------
    | CategoryController(add,delete,update,Select)
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'categories'], function () {

        Route::get('/', 'CategoryController@getAll');

        Route::get('{category}', 'CategoryController@categoriesProducts');

        Route::post('add', 'CategoryController@addCategory');

        Route::get('delete/{category}', 'CategoryController@deleteCategoryGet');

        Route::post('delete/{category}', 'CategoryController@deleteCategoryPost');

        Route::get('update/{category}', 'CategoryController@updateCategoryGet');

        Route::post('update/{category}', 'CategoryController@updateCategoryPost');
    });

    /*
    |--------------------------------------------------------------------------
    | ProductController(add,delete,update,Select)
    |--------------------------------------------------------------------------
     */
    Route::group(['prefix' => 'products'], function () {

        Route::get('/', 'ProductController@getAll');

        Route::get('add', 'ProductController@addProductGet');

        Route::post('add', 'ProductController@addProductPost');

        Route::get('delete/{product}', 'ProductController@deleteProductGet');

        Route::post('delete/{product}', 'ProductController@deleteProductPost');

        Route::get('update/{product}', 'ProductController@updateProductGet');

        Route::post('update/{product}', 'ProductController@updateProductPost');

        Route::get('{product}', 'ProductController@viewProduct');
    });

    /*
    |--------------------------------------------------------------------------
    | AdminController-Users(delete,Select)
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'users'], function () {

        Route::get('/', 'AdminController@getUsers');

        Route::get('{user}', 'AdminController@viewUser');

        Route::get('delete/{user}', 'AdminController@deleteUserGet');

        Route::post('delete/{user}', 'AdminController@deleteUserPost');
    });

    /*
    |--------------------------------------------------------------------------
    | AdminController-Orders(delete,Select)
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'orders'], function () {

        Route::get('/', 'OrderController@getOrders');

        Route::get('{id}', 'OrderController@getUserOrder');

    });

    /*
    |--------------------------------------------------------------------------
    | AdminController-Admin
    |--------------------------------------------------------------------------
    */
    Route::get('/', 'AdminController@index');

    Route::get('logout', 'AdminController@logout');

});
//----------------------------------------------------------------------------
Route::group(['prefix' => 'admin', 'middleware' => 'admin.authenticated'], function () {

    Route::get('login', 'AdminController@getLogin');

    Route::post('login/post', 'AdminController@postLogin')->name('admin.login');

    Route::get('register', 'AdminController@getRegister');

    Route::post('register/post', 'AdminController@postRegister')->name('admin.register');
});