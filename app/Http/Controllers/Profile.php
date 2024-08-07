<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    // CRUD
    public function index()
    {
        return view('user.profile');
    }
}
