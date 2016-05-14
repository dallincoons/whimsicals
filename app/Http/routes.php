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

    Route::resource('product/add', 'AddProductController');


    Route::post('product', 'ProductsController@add');
    Route::get('/', 'ProductsController@home');
    Route::get('product/{product}', 'ProductsController@show');

    Route::get('events', function(){

        return view('events');

    });


    Route::get('contact', function(){

        return view('contact');

    });

    /**
     * turn into a resource
     */
    Route::get('cart', 'CartController@showCart');
    Route::post('/cart/add', 'CartController@add');
    Route::post('/cart/remove', 'CartController@remove');
    Route::post('/cart/update', 'CartController@update');

    Route::auth();

    /**
     * replace
     */
    Route::get('/error', function(){

        return view('error');

    });

});

