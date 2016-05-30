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
Route::get('/events/edit-single', function() {
    return view('events.edit-single');
});

Route::group(['middleware' => ['web']], function(){

    Route::get('/', function(){
        return view('home');
    });

    Route::delete('/events', 'EventsController@delete');
    Route::get('/events/edit', 'EventsController@showPanel');
    Route::resource('events', 'EventsController');

    /**
     * patch requests don't accept files?
     */
     Route::post('/products/{id}/update', 'ProductsController@update');

    Route::delete('/products', 'ProductsController@delete');
    Route::get('products/edit', 'ProductsController@showPanel');
    Route::post('products/image', 'AddProductController@addImage');
    Route::resource('products', 'ProductsController');
    Route::get('products/{product}', 'ProductsController@show');
    Route::get('products/image/{id}', 'ProductsController@addImage');


    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@sendMessage');

    Route::get('portal', function(){

        return view('member_portal');

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

