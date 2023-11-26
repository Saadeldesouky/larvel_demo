<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
   return view('layouts.master') ;
});

Route::view('/', 'pages.home')->name('home');
//Route::view('/events', 'pages.events')->name('events');
Route::get('/events', [\App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::view('/create', 'pages.create')->name('create');
Route::post('/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::get('/events/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('show');
Route::get('/events/{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
Route::put('/events/{id}/update', [\App\Http\Controllers\ProductController::class , 'update'])->name('update');
Route::delete('/events/{id}/delete', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy');
