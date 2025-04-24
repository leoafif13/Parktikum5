<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Praktikum5', function () {
    return view('Praktikum5');
});
Route::get('/produk', [ProductController::class, 'index']);
