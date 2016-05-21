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

    Route::post('product/image', 'AddProductController@addImage');

    Route::resource('product', 'ProductsController');

    Route::get('product/{product}', 'ProductsController@show');

    Route::get('product/image/{id}', 'ProductsController@addImage');

    Route::get('contact', function(){

        return view('contact');

    });

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

