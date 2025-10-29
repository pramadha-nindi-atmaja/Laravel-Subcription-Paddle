<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file defines all web routes for your application.
| Routes here use the "web" middleware group automatically.
|
*/

// Homepage
Route::view('/', 'welcome')->name('home');

// Dashboard (requires authentication)
Route::view('/dashboard', 'dashboard')
    ->middleware(['auth'])
    ->name('dashboard');

// Authentication routes
require __DIR__ . '/auth.php';
