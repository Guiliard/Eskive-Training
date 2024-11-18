<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_route', function () {
    return view('test_route');
});

Route::get('/test_product/{id}', function ($id) {
    return "The product id is: " . $id;
});