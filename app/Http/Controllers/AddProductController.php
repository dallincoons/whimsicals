<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Http\Requests\AddProductRequest;

class AddProductController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }

    public function index()
    {
        return view('products.add');
    }
    
    public function store(AddProductRequest $request)
    {

        Product::create($request->all());

        return redirect('/');
    }

}
