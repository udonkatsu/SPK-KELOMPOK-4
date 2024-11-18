<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\BulanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangTahunBulanController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\LandController;

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

Route::get('/', [LandController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/akun', [AkunController::class, 'index'])->middleware('auth')->name('akun');
Route::get('/akun-add', [AkunController::class, 'create'])->middleware('auth')->name('akun-add');
Route::post('/akun-store', [AkunController::class, 'store'])->middleware('auth');
Route::get('/akun-edit/{id}', [AkunController::class, 'edit'])->middleware('auth')->name('akun-edit');
Route::put('/akun-update/{id}', [AkunController::class, 'update'])->middleware('auth');
Route::get('/akun-destroy/{id}', [AkunController::class, 'destroy'])->middleware('auth');

Route::get('/tahun', [TahunController::class, 'index'])->middleware('auth')->name('tahun');
Route::get('/tahun-add', [TahunController::class, 'create'])->middleware('auth')->name('tahun-add');
Route::post('/tahun-store', [TahunController::class, 'store'])->middleware('auth');
Route::get('/tahun-edit/{id}', [TahunController::class, 'edit'])->middleware('auth')->name('tahun-edit');
Route::put('/tahun-update/{id}', [TahunController::class, 'update'])->middleware('auth');
Route::get('/tahun-destroy/{id}', [TahunController::class, 'destroy'])->middleware('auth');

Route::get('/bulan', [BulanController::class, 'index'])->middleware('auth')->name('bulan');
Route::get('/bulan-add', [BulanController::class, 'create'])->middleware('auth')->name('bulan-add');
Route::post('/bulan-store', [BulanController::class, 'store'])->middleware('auth');
Route::get('/bulan-edit/{id}', [BulanController::class, 'edit'])->middleware('auth')->name('bulan-edit');
Route::put('/bulan-update/{id}', [BulanController::class, 'update'])->middleware('auth');
Route::get('/bulan-destroy/{id}', [BulanController::class, 'destroy'])->middleware('auth');

Route::get('/barang', [BarangController::class, 'index'])->middleware('auth')->name('barang');
Route::get('/barang-add', [BarangController::class, 'create'])->middleware('auth')->name('barang-add');
Route::post('/barang-store', [BarangController::class, 'store'])->middleware('auth');
Route::get('/barang-edit/{id}', [BarangController::class, 'edit'])->middleware('auth')->name('barang-edit');
Route::put('/barang-update/{id}', [BarangController::class, 'update'])->middleware('auth');
Route::get('/barang-destroy/{id}', [BarangController::class, 'destroy'])->middleware('auth');
Route::get('/barang-request_terms/{id}', [BarangController::class, 'request_terms'])->middleware('auth');

Route::get('/barang_tahun_bulan', [BarangTahunBulanController::class, 'index'])->middleware('auth')->name('barang_tahun_bulan');
Route::get('/barang_tahun_bulan-add', [BarangTahunBulanController::class, 'create'])->middleware('auth')->name('barang_tahun_bulan-add');
Route::post('/barang_tahun_bulan-store', [BarangTahunBulanController::class, 'store'])->middleware('auth');
Route::get('/barang_tahun_bulan-edit/{id}', [BarangTahunBulanController::class, 'edit'])->middleware('auth')->name('barang_tahun_bulan-edit');
Route::put('/barang_tahun_bulan-update/{id}', [BarangTahunBulanController::class, 'update'])->middleware('auth');
Route::get('/barang_tahun_bulan-destroy/{id}', [BarangTahunBulanController::class, 'destroy'])->middleware('auth');

Route::get('/perhitungan-terms', [PerhitunganController::class, 'terms'])->middleware('auth')->name('perhitungan-terms');
Route::get('/perhitungan-config', [PerhitunganController::class, 'config'])->middleware('auth')->name('perhitungan-config');
Route::get('/perhitungan-set/{barang_id_terms}/{term}', [PerhitunganController::class, 'set'])->middleware('auth')->name('perhitungan-set');

// Route::get('/barang_tahun_bulan-request', [BarangTahunBulanController::class, 'request'])->name('barang-request');
