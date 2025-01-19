<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanHomeController;
use App\Http\Controllers\HalamanAboutController;
use App\Http\Controllers\HalamanCustomerController;
use App\Http\Controllers\HalamanProductController;
use App\Http\Controllers\HalamanKategoriController;

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
    return view('home');
});

Route::get('/home', [HalamanHomeController::class, 'index'])->name('halamanhome.index');
Route::get('/kategori', [HalamanKategoriController::class, 'index'])->name('halamankategori.index');
Route::get('/product', [HalamanProductController::class, 'index'])->name('halamanproduct.index');
Route::get('/about', [HalamanAboutController::class, 'index'])->name('halamanabout.index');
Route::get('/customer', [HalamanCustomerController::class, 'index'])->name('halamancustomer.index');