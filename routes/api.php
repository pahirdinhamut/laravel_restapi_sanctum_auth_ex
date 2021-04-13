<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/products', [ProductController::class, 'index']);


Route::resource('products', ProductController::class);
Route::get('/products/search/{carname}', [ProductController::class, 'search']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
