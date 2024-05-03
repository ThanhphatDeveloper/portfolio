<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/index');
});



// backend routes
Route::get('/login', function () {
    return view('frontend/login');
});

Route::get('/register', function () {
    return view('frontend/register');
});

Route::get('/admin', function () {
    return view('admin/index');
});