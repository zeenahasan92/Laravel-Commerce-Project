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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| CategoryController(add,delete,update,Select)
|--------------------------------------------------------------------------
*/

Route::get('/categories','CategoryController@getAll');

Route::get('/categories/{category}','CategoryController@categoriesProducts');

Route::post('/categories/add','CategoryController@addCategory');

Route::get('/categories/delete/{category}','CategoryController@deleteCategoryGet');

Route::post('/categories/delete/{category}','CategoryController@deleteCategoryPost');

Route::get('/categories/update/{category}','CategoryController@updateCategoryGet');

Route::post('/categories/update/{category}','CategoryController@updateCategoryPost');

/*
|--------------------------------------------------------------------------
| ProductController(add,delete,update,Select)
|--------------------------------------------------------------------------
*/

Route::get('/products','ProductController@getAll');

Route::get('/products/add','ProductController@addProductGet');

Route::post('/products/add','ProductController@addProductPost');

Route::get('/products/delete/{product}','ProductController@deleteProductGet');

Route::post('/products/delete/{product}','ProductController@deleteProductPost');

Route::get('/products/update/{product}','ProductController@updateProductGet');

Route::post('/products/update/{product}','ProductController@updateProductPost');

Route::get('/products/{product}','ProductController@viewProduct');

/*
|--------------------------------------------------------------------------
| CategoryController(add,delete,update,Select)
|--------------------------------------------------------------------------
*/

Route::group(['middleware'=>'admin.middleware'],function (){

    Route::get('/admin/dashboard',function (){
        return "Authenticated";
    });

    Route::get('/admin/get_admin','AdminController@getAdmin');

    Route::get('/admin/logout','AdminController@logout');
});




Route::group(['middleware'=>'admin.authenticated'],function (){

    Route::get('/admin/login','AdminController@getLogin');

    Route::post('/admin/login/post','AdminController@postLogin')->name('admin.login');

    Route::get('/admin/register','AdminController@getRegister');

    Route::post('/admin/register/post','AdminController@postRegister')->name('admin.register');
});