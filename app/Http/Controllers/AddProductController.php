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

    public function addImage(Request $request)
    {
        $file = $request->file('file');

        $name = time() . $file->getClientOriginalName();

        $file->move('products/images', $name);

        return 'Done';
    }

}
