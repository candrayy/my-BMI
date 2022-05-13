<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BmiController;

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

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/post-login', [LoginController::class, 'postlogin'])->name('post-login');
Route::post('/post-register', [LoginController::class, 'postregister'])->name('post-register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// BMI
Route::get('/bmi', [BmiController::class, 'index'])->name('bmi');
Route::get('/bmi-result', [BmiController::class, 'result'])->name('bmi-result');



Route::group(['middleware' => 'auth', 'revalidate'], function () {
    
    // Admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    
    // Kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/tambah-kategori', [KategoriController::class, 'create'])->name('tambah-kategori');
    Route::post('/simpan-kategori', [KategoriController::class, 'store'])->name('simpan-kategori');
    Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('edit-kategori');
    Route::post('/update-kategori/{id}', [KategoriController::class, 'update'])->name('update-kategori');
    Route::get('/hapus-kategori/{id}', [KategoriController::class, 'destroy'])->name('hapus-kategori');
    
    // Makanan
    Route::get('/makanan', [MakananController::class, 'index'])->name('makanan');
    Route::get('/tambah-makanan', [MakananController::class, 'create'])->name('tambah-makanan');
    Route::post('/simpan-makanan', [MakananController::class, 'store'])->name('simpan-makanan');
    Route::get('/edit-makanan/{id}', [MakananController::class, 'edit'])->name('edit-makanan');
    Route::post('/update-makanan/{id}', [MakananController::class, 'update'])->name('update-makanan');
    Route::get('/hapus-makanan/{id}', [MakananController::class, 'destroy'])->name('hapus-makanan');

});