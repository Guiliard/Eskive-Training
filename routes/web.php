<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'welcome'])->name('product.welcome');

    Route::post('/store', [ProductController::class, 'store'])->name('product.store');

    Route::get('/{id}', [ProductController::class, 'show_one'])->name('product.show_one');

    Route::get('/all', [ProductController::class, 'show_all'])->name('product.show_all');

    Route::put('/{id}', [ProductController::class, 'update'])->name('product.update');

    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'welcome'])->name('category.welcome');

    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');

    Route::get('/{id}', [CategoryController::class, 'show_one'])->name('category.show_one');

    Route::get('/all', [CategoryController::class, 'show_all'])->name('category.show_all');

    Route::put('/{id}', [CategoryController::class, 'update'])->name('category.update');

    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});


