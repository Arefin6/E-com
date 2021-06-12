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

Route::get('/', [
    'uses' => 'HomeController@welcome',
    'as' => 'welcome'
]);

//cart

Route::get('/cart',[
 
    'uses'=>'CartController@cart',
      
    'as'  =>'carts'
  
  ]);

  Route::post('/cart/update',[
 
    'uses'=>'CartController@updateCart',
      
    'as'  =>'cart.update'
  
  
  ]);

  Route::get('/cat/add/{id}',[
 
    'uses'=>'CartController@addToCart',
      
    'as'  =>'cart.add'
  
  ]);
  
  Route::get('/cart/remove/{id}',[
 
    'uses'=>'CartController@removeFromCart',
      
    'as'  =>'cart.remove'
  
  
  ]);

  //checkout

  Route::get('/checkout',[
 
    'uses'=>'FrontEndController@checkout',
      
    'as'  =>'checkout'
  
  ]);

  Route::post('/checkout/store',[
 
    'uses'=>'OrderController@storeCheckout', 
    'as'  =>'checkout.store'
  
  ]); 


 //client Login

 Route::get('/user/signin',[
 
    'uses'=>'FrontEndController@login',
      
    'as'  =>'login.user'
  
  ]);
 
  Route::post('/client/createAccount',[
 
     'uses'=>'clientController@createAccount',
      
    'as'  =>'client.createAccount'   
    
   ]);

   Route::get('/user/logout',[
 
    'uses'=>'clientController@logout',
      
    'as'  =>'logout.user'
    
    
  ]);
   Route::post('/client/accessAccount',[
 
    'uses'=>'clientController@accessAccount',
      
    'as'  =>'client.accessAccount'
  
  ]);


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

    //Posts
    Route::get('/post/create', [
        'uses' => 'PostController@create',
        'as' => 'post.create'
    ]);
    Route::post('/post/store', [
        'uses' => 'PostController@store',
        'as' => 'post.store'
    ]);
    Route::get('/post', [
        'uses' => 'PostController@index',
        'as' => 'post.index'
    ]);
    Route::get('/post/edit/{id}', [
        'uses' => 'PostController@edit',
        'as' => 'post.edit'
    ]);
    Route::post('/post/update/{id}', [
        'uses' => 'PostController@update',
        'as' => 'post.update'
    ]);
    Route::get('/post/delete/{id}', [
        'uses' => 'PostController@destroy',
        'as' => 'post.delete'
    ]);

    Route::get('/message/index', [
        'uses' => 'MessageController@index',
        'as' => 'message.index'
    ]);

    
});

//message
Route::get('/message/create', [
    'uses' => 'MessageController@create',
    'as' => 'message.create'
]);

Route::post('/message/store', [
    'uses' => 'MessageController@store',
    'as' => 'message.store'
]);

Route::get('/products',[
    'uses' => 'FrontEndController@product',
    'as' => 'products' 
]);
Route::get('/blogs',[
    'uses' => 'FrontEndController@blogs',
    'as' => 'blogs' 
]);

Route::get('/{slug}', [
	
    'uses' => 'FrontendController@singlePost',

    'as' => 'post.single'
]);



 



