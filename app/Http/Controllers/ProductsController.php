<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Product;
use App\Image;
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

        $products = Product::orderBy('created_at','desc')->with('images')->get();

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

//        $this->validate($request, [
//            'product_image' => 'mimes:jpg,jpeg,png,bmp'
//        ]);

        $file = $request->file('product_image');

        $product = Product::create($request->all());

        if(!empty($file)) {

            $name = time() . $file->getClientOriginalName();

            $url = 'asset_product_images/' . $product->id;

            $file->move($url, $name);

            Image::create(['product_id' => $product->id, 'url' => '/' . $url . '/' . $name]);

        }

        return $product->id;

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

    /**
     * @param $id
     * @return View
     */
    public function addImage($id)
    {
        return view('products.add_image', compact('id'));
    }

    /**
     * @return View
     */
    public function showPanel()
    {

        $products = Product::orderBy('created_at','desc')->get();

        return view('products.panel', compact('products'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return View
     */
    public function edit(Request $request, $id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    /**
     *
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update($request->all());

        return redirect('/products/edit');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function delete(Request $request)
    {

        $selectedProducts = $request->selected_products;

        Product::destroy($selectedProducts);

        return back();
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return 'success';
    }

}
