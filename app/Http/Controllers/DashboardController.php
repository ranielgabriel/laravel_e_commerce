<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // Array
        $products = [
            [
                "name" => "Nike Air Max",
                "image" => "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8adace69-12cb-47fb-8921-661a68166a33/WMNS+AIR+FORCE+1+%2707+LX.png",
                "description" => "Running Shoes ni Yulo"
            ],
            [
                "name" => "Jordan",
                "image" => "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8adace69-12cb-47fb-8921-661a68166a33/WMNS+AIR+FORCE+1+%2707+LX.png",
                "description" => "Running Shoes ni Jordan"
            ],
        ];

        return view('dashboard')->with("products", json_encode($products));
    }
}
