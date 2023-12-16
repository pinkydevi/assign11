<?php
use App\Http\Controllers\ProductController;

Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::post('/products/sell/{id}', [ProductController::class, 'sell']);
Route::post('/products/change-price/{id}', [ProductController::class, 'changePrice']);
?>
