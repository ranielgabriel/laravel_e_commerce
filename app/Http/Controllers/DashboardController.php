<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $products = [
            [
                'name' => 'Nike Air Max',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/416fc7f2-500e-474c-83d2-fa691976b32c/air-max-dn-electric-shoes-3pwX55.png',
                'description' => 'Running Shoes'
            ],
        ];
        return view('dashboard')->with('products', json_encode($products));
    }
}
