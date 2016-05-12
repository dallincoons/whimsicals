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

        return view('cart', compact('cartItems'));

    }

    public function add(Request $request)
    {
        $quantity   = $request->input('quantity');
        $product_id = $request->input('product_id');

        $product = Product::find($product_id);

        $totalprice = $this->getPrice($product, $quantity);

        Cart::add($product_id, 'name', $quantity, $totalprice);

    }

    public function remove(Request $request)
    {
        $itemId = $request->input('itemId');

        Cart::remove($itemId);

        $cartItems = Cart::content();

        return view('cart', compact('cartItems'));
    }

//    public function remove($itemId)
//    {
//        Cart::remove($itemId);
//
//        $cartItems = Cart::content();
//
//        return view('cart', compact('cartItems'));
//    }

    private function getPrice($product, $quantity)
    {
        return $product->price * $quantity;
    }
}
