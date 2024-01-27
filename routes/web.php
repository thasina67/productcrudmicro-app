<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\ProductTypeController;

Route::get('/', function () {
    return view('welcome');
});
// Route::resource("/product", ProductController::class);
// Route::resource("/productType", ProductTypeController::class);
