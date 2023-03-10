<?php

use App\Http\Controllers\ProductDisplayController;

Route::get('/sarisari/products/{id}', [ProductDisplayController::class, 'showProductById']);
Route::get('/sarisari/products/{name}', [ProductDisplayController::class, 'showProductByName']);