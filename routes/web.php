<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/product/create', [ProductController::class, 'create'])
    ->name('create_product');
Route::post('/product/store', [ProductController::class, 'store'])
    ->name('store_product');
