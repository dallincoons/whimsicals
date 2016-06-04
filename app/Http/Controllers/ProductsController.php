<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\Product;
use App\Image as Photo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\File;
use App\Http\Requests;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

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
    public function show(Product $product)
    {
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
     * @param ProductRequest $request
     * @return mixed
     */
    public function store(ProductRequest $request)
    {

        $photo = $request->file('product_image');

        $product = Product::create($request->all());

        if(!empty($photo)) {

            $this->makePhoto($photo, $product);

        }

        flash()->success('Product has been created');

        return redirect('/products/' . $product->id);

    }

    protected function makePhoto($file, $product)
    {

        $name = time() . $file->getClientOriginalName();
        $thumb_name = 'thumb_' . $name;

        $url = 'asset_product_images/' . $product->id . '/';
        $thumb_url = $url . $thumb_name;

        $file->move($url, $name);

        Image::make($url . $name)->orientate()->save($url . $name);
        Image::make($url . $name)->fit(150)->save($thumb_url);

        Photo::create(['product_id' => $product->id, 'url' => '/' . $url . '/' . $name, 'thumbnail_url' => '/' . $thumb_url]);

        return array('url' => $url . $name, 'thumb_url' => $thumb_url);

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
     * @return View
     */
    public function showPanel()
    {

        $products = Product::latest('created_at')->with('images')->get();

        return view('products.panel', compact('products'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return View
     */
    public function edit(Product $product)
    {
        flash()->success('Product has been updated');

        return view('products.edit', compact('product'));
    }

    /**
     *
     */
    public function update(Request $request, Product $product)
    {
        if(Input::get('delete'))
        {

            $product->delete();

            flash()->success('Product has been deleted');

            return redirect('/products/edit');

        }

        if(Input::file('product_image'))
        {
            $photo = Input::file('product_image');

            File::deleteDirectory(public_path() . DIRECTORY_SEPARATOR . 'asset_product_images/' . $product->id) ? 'true' : 'false';

            $urls = $this->makePhoto($photo, $product);

            $product->images()->delete();


            Photo::create(['product_id' => $product->id,'url' => '/' . $urls['url'], 'thumbnail_url' => '/' . $urls['thumb_url']]);

        }

        flash()->success('Product has been updated');

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

        flash()->success('Products have been deleted');

        return back();
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        flash()->success('Product ha been deleted');

        return redirect('/products/edit');
    }

}
