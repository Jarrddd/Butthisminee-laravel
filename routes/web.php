<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PaymentController;






Route::get('/', function () {
    return view('welcome');
});

// auth adm
Route::get('login', [Authcontroller::class, 'index'])->name('login');
Route::post('login', [Authcontroller::class, 'login']);
Route::get('logout', [Authcontroller::class, 'logout']);

// login member
Route::get('login_member', [Authcontroller::class, 'login_member']);
Route::post('login_member', [Authcontroller::class, 'login_member_action']);
Route::get('logout_member', [Authcontroller::class, 'logout_member']);

//register
Route::get('register_member', [Authcontroller::class, 'register_member']);
Route::post('register_member', [Authcontroller::class, 'register_member_action']);





//kategori
Route::get('/kategori', [CategoryController::class, 'list']);
Route::get('/subkategori', [SubcategoryController::class, 'list']);
Route::get('/slider', [SliderController::class, 'list']);
Route::get('/barang', [ProductController::class, 'list']);
Route::get('/testimoni', [TestimoniController::class, 'list']);
Route::get('/review', [ReviewController::class, 'list']);
Route::get('/payment', [PaymentController::class, 'list']);

//pesanan
Route::get('/pesanan/baru', [OrderController::class, 'list']);
Route::get('/pesanan/dikonfirmasi', [OrderController::class, 'dikonfirmasi_list']);
Route::get('/pesanan/dikemas', [OrderController::class, 'dikemas_list']);
Route::get('/pesanan/dikirim', [OrderController::class, 'dikirim_list']);
Route::get('/pesanan/diterima', [OrderController::class, 'diterima_list']);
Route::get('/pesanan/selesai', [OrderController::class, 'selesai_list']);

Route::get('/laporan', [ReportController::class, 'index']);


Route::get('/dashboard', [DashboardController::class, 'index']);

