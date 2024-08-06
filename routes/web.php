<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [Dashboard::class, 'index']);
Route::get('/profile', [User::class, 'profile']);
