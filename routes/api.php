<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Auth API
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Categories API
Route::get('categories', [CategoryController::class, 'index']);

// Products API
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);

// Protected Routes (Hanya untuk user yang sudah login)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    // Orders
    Route::post('orders', [OrderController::class, 'store']);
    Route::get('orders', [OrderController::class, 'index']);

    // Reviews
    Route::post('products/{id}/reviews', [ReviewController::class, 'store']);
});
