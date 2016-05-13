<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests;
use App\Product;

class CartController extends Controller
{
    public function showCart()
    {
        $cartItems = Cart::content();
        $total     = Cart::total();

        return view('cart', compact('cartItems', 'total', 'taxes'));

    }

    public function add(Request $request)
    {
        $quantity   = $request->input('quantity');
        $product_id = $request->input('product_id');

        $product = Product::find($product_id);

        $totalprice = $this->getPrice($product, $quantity);

        Cart::add($product_id, $product->title, $quantity, $totalprice, ['description' => $product->description]);

    }

    public function remove(Request $request)
    {
        $itemId = $request->input('itemId');

        Cart::remove($itemId);

    }

    public function update(Request $request)
    {

        $rowid    = $request['rowid'];
        $quantity = $request['quantity'];

        Cart::update($rowid, $quantity);
    }

    private function getPrice($product, $quantity)
    {
        return $product->price * $quantity;
    }
}
