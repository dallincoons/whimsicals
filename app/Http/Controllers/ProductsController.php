<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Product;


use App\Http\Requests;

class ProductsController extends Controller
{
    public function home()
    {

        $products = Product::all();

        return View::make('products.all', compact('products', 'user'));

    }

    public function show($id)
    {

        $product = Product::find($id);

        //check if quantity exceeds max allowed quantity
        $quantity = ($product->quantity > 20) ? 20 : $product->quantity;

        return view('products.single', compact('product', 'quantity'));
    }

    public function add(Request $request, Product $product)
    {

        $product->create($request->all());

        return redirect('/');
    }

}
