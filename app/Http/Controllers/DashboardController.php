<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Pang create ng product
        $product = new Product();
        $product->name = "Nike Air Max";
        $product->image = "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8adace69-12cb-47fb-8921-661a68166a33/WMNS+AIR+FORCE+1+%2707+LX.png";
        $product->description = "Running Shoes ni Yulo";
        $product->save();

        // Pang display ng product
        $products = Product::get();
        return view('dashboard')->with('products', $products);

        // // Array
        // $products = [
        //     [
        //         "name" => "Nike Air Max",
        //         "image" => "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8adace69-12cb-47fb-8921-661a68166a33/WMNS+AIR+FORCE+1+%2707+LX.png",
        //         "description" => "Running Shoes ni Yulo"
        //     ]
        // ];

        // return view('dashboard')->with("products", json_encode($products));
    }
}
