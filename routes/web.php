<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/cv', function () {
    return view('cv');
})->name('cv');

Route::get('/download-cv', function () {

    // Đường dẫn tới file CV của bạn
    $filePath = public_path('assets/files/nguyen-thanh-phat.pdf');

    // Kiểm tra xem file có tồn tại không
    if (file_exists($filePath)) {
        // Trả về file CV cho người dùng
        return response()->file($filePath);
    } else {
        // Nếu file không tồn tại, bạn có thể redirect người dùng tới một trang thông báo lỗi
        return redirect()->back()->with('error', 'File CV không tồn tại.');
    }
})->name('download.cv');


