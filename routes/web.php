<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello! This is my first Laravel page 🚀';
});
Route::get('/structure', function () {
    return view('structure');
});
Route::get('/env-demo', function () {
    return view('env-demo');
});