<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');
Route::get('/category/{id}', [HomeController::class, 'category'])->name('category');
