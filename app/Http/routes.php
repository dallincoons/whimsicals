<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function(){

    Route::get('product/add', 'AddProductController@show');
    Route::post('product', 'ProductsController@add');

    Route::get('/', 'ProductsController@home');
    Route::get('product/{product}', 'ProductsController@show');


    Route::get('contact', function(){

        return view('contact');

    });

    Route::get('cart', 'CartController@showCart');
    Route::post('/cart/add', 'CartController@add');
    Route::post('/cart/remove', 'CartController@remove');

    Route::auth();

    /**
     * replace
     */
    Route::get('/error', function(){

        return view('error');

    });

});

