<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ResourceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_route', function () {
    return view('test_route');
});

Route::get('/test_product/{id?}', function ($id = 0) {
    return "The product id is: " . $id;
});

Route::group(['prefix' => 'test_controller'], function () {
    Route::get('/', [TestController::class, 'index'])->name('test_controller.index');

    Route::get('/product/{id?}', [TestController::class, 'show'])->name('test_controller.show');

    Route::get('/resource', [ResourceController::class, 'index'])->name('test_controller.resource');
});
