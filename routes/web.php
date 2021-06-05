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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);
    Route::get('/category/create', [
        'uses' => 'CategoryController@create',
        'as' => 'category.create'
    ]);
    Route::post('/category/store', [
        'uses' => 'CategoryController@store',
        'as' => 'category.store'
    ]);
    Route::get('/categories', [
        'uses' => 'CategoryController@index',
        'as' => 'categories'
    ]);
    Route::get('/category/edit/{id}', [
        'uses' => 'CategoryController@edit',
        'as' => 'category.edit'
    ]);
    Route::post('/category/update/{id}', [
        'uses' => 'CategoryController@update',
        'as' => 'category.update'
    ]);
    Route::get('/category/delete/{id}', [
        'uses' => 'CategoryController@destroy',
        'as' => 'category.delete'
    ]);

    //Products

    Route::get('/product/create', [
        'uses' => 'ProductController@create',
        'as' => 'product.create'
    ]);
    Route::post('/product/store', [
        'uses' => 'ProductController@store',
        'as' => 'product.store'
    ]);
    Route::get('/products', [
        'uses' => 'ProductController@index',
        'as' => 'product.index'
    ]);
    Route::get('/product/edit/{id}', [
        'uses' => 'ProductController@edit',
        'as' => 'product.edit'
    ]);
    Route::post('/product/update/{id}', [
        'uses' => 'productController@update',
        'as' => 'product.update'
    ]);
    Route::get('/product/delete/{id}', [
        'uses' => 'productController@destroy',
        'as' => 'product.delete'
    ]);
});  
