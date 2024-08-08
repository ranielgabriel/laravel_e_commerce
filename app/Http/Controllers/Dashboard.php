<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    // CRUD
    public function index()
    {
        $products = [
            [
                'name' => 'Nike Vaporfly 3 Electric', //name ng product
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c7d09109-ca02-4bc9-97b3-3d4c99c3a0c2/vaporfly-3-electric-road-racing-shoes-ZR5Glm.png', //source ng image
                'description' => 'Road Racing Shoes' //short description ng product
            ]
        ];
        return view('dashboard')->with('products', json_encode($products));
    }
}
