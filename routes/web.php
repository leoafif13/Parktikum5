<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Praktikum5', function () {
    return view('Praktikum5');
});
