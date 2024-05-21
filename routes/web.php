<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ResetPasswordController;




Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'blogs'])->name('blogs');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\RegisterController::class,'register'])->name('register');
Route::get('/reset', [App\Http\Controllers\Auth\ResetPasswordController::class,'resetpass'])->name('resetpass');






