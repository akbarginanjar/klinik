<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dokter', function () {
    return view('dokter');
});
Route::get('/galeri', function () {
    return view('galeri');
});
