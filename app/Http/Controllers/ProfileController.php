<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $user_email = 'rgabriel@gmail.com';
        $user_name = 'Raniel Gabriel';
        return view('user.profile')
            ->with('user_email', $user_email)
            ->with('user_name', $user_name);
    }
}
