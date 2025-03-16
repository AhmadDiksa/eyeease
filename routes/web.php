<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// Route::get('/profile', [ProfileController::class, 'show']);



Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/product/{id}', [FrontendController::class, 'productDetail'])->name('product.detail');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
