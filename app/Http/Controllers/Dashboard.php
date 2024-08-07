<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    // CRUD
    public function index()
    {
        return view('dashboard');
    }
}
