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

Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index'); 

    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');

    Route::post('/', [CategoryController::class, 'store'])->name('category.store'); 

    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('category.show'); 

    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');

    Route::put('/{id}', [CategoryController::class, 'update'])->name('category.update'); 
    
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.destroy'); 
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');  

    Route::get('/create', [ProductController::class, 'create'])->name('product.create');

    Route::post('/', [ProductController::class, 'store'])->name('product.store'); 

    Route::get('show/{id}', [ProductController::class, 'show'])->name('product.show'); 

    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

    Route::put('/{id}', [ProductController::class, 'update'])->name('product.update'); 

    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.destroy'); 
});