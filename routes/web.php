<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('papunta_sa_dashboard');
Route::get('/profile', [ProfileController::class, 'index'])->name('papunta_sa_profile');
