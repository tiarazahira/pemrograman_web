<?php

use Illuminate\Http\Request;
use App\Http\Middleware\ClientAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::middleware(ClientAuth::class)->group(function () {
    Route::get('/products', [ProductApiController::class, 'index']);
});