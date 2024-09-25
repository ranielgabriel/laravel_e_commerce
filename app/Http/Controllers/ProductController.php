<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->get('name');
        $product->image = $request->get('image');
        $product->description = $request->get('description');
        $product->save();

        return redirect()->route('dashboard');
    }
}
