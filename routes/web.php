<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Product;

Route::get('/', function () {
    $categories = Category::all();
    $products = Product::all();
    return view('home/welcome', compact('categories', 'products'));
})->name('home');

Route::resource('categories', CategoryController::class);

Route::resource('products', ProductController::class);