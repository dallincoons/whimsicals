<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Product;
use Carbon\Carbon;
use App\Http\Requests\AddProductRequest;


use App\Http\Requests;

class ProductsController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {

        $products = Product::all();

        return View::make('products.all', compact('products', 'user'));

    }

    /**
     * @param $id
     * @return View
     */
    public function show($id)
    {

        $product = Product::find($id);

        //check if quantity exceeds max allowed quantity
        $quantity = ($product->quantity > 20) ? 20 : $product->quantity;

        return view('products.single', compact('product', 'quantity'));

    }

    /**
     * @return View
     */
    public function create()
    {

        return view('products.create');

    }

    /**
     * @param AddProductRequest $request
     * @return mixed
     */
    public function store(AddProductRequest $request)
    {

        $product = Product::create($request->all());

        return redirect('/product/image/' . $product->id);

    }

    /**
     * @param Request $request
     * @param Product $product
     * @return mixed
     */
    public function add(Request $request, Product $product)
    {

        $product->create($request->all());

        return redirect('/');

    }

    public function addImage($id)
    {
        return view('products.add_image', compact('id'));
    }

}
