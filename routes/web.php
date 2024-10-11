<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthController;

// Route cho trang chủ
Route::get('/', function () {
    return view('welcome');
});

// Nhóm route cho sinh viên (bao gồm cả trang danh sách sinh viên)
Route::middleware('auth')->group(function () {
    // Trang danh sách sinh viên sẽ là trang mặc định sau khi đăng nhập
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::resource('students', StudentController::class);
});

// Nhóm route cho profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Nạp các route xác thực
require __DIR__ . '/auth.php';
