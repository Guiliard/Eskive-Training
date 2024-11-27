<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home/welcome');
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');  

    Route::post('/', [ProductController::class, 'store'])->name('product.store'); 

    Route::get('/{id}', [ProductController::class, 'show'])->name('product.show'); 

    Route::put('/{id}/edit', [ProductController::class, 'update'])->name('product.update'); 

    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.destroy'); 
});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index'); 

    Route::post('/', [CategoryController::class, 'store'])->name('category.store'); 

    Route::get('/{id}', [CategoryController::class, 'show'])->name('category.show'); 

    Route::put('/{id}/edit', [CategoryController::class, 'update'])->name('category.update'); 
    
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.destroy'); 
});