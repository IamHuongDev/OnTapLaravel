<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Master');
});

// Route::get('/tinh-tuoi/{namSinh}',[\App\Http\Controllers\tuViController::class, 'xemTuVi']);

// Route::get('/tu-vi',[\App\Http\Controllers\tuViController::class, 'viewTuVi']);

// Route::post('/tu-vi-new',[\App\Http\Controllers\tuViController::class, 'tinhToanTuVi']);

// Route::post('/than-so-hoc',[\App\Http\Controllers\tuViController::class, 'tinhThanSoHoc']);

Route::get('/loai-san-pham/create', [\App\Http\Controllers\LoaiSanPhamController::class, 'create']);
Route::post('/loai-san-pham/create', [\App\Http\Controllers\LoaiSanPhamController::class, 'store']);
Route::get('/loai-san-pham/delete/{id}', [\App\Http\Controllers\LoaiSanPhamController::class, 'destroy']);
Route::get('/loai-san-pham/edit/{id}', [\App\Http\Controllers\LoaiSanPhamController::class, 'edit']);
Route::post('/loai-san-pham/update', [\App\Http\Controllers\LoaiSanPhamController::class, 'update']);





