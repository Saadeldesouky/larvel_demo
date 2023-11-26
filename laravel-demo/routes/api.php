<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/events', [\App\Http\Controllers\ProductApiController::class, 'index'])->name('index');
Route::get('/events/{id}', [\App\Http\Controllers\ProductApiController::class, 'show'])->name('show');
Route::post('/events', [\App\Http\Controllers\ProductApiController::class, 'store'])->name('store');
Route::put('/events/{id}', [\App\Http\Controllers\ProductApiController::class, 'update'])->name('update');
Route::delete('/events/{id}', [\App\Http\Controllers\ProductApiController::class, 'destroy'])->name('destroy');
Route::get('/events/search/{title}', [\App\Http\Controllers\ProductApiController::class, 'search'])->name('search');
