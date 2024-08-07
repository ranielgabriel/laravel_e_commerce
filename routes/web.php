<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [Dashboard::class, 'index']);
Route::get('/profile', [Profile::class, 'index']);
