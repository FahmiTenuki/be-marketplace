<?php

use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('product-type', ProductTypeController::class);
Route::resource('product', ProductController::class);
Route::post('product-update/{id}' , [ProductController::class, 'update']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');