<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PageFrontend;

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

Route::get('/', [PageFrontend::class, 'index'])->name('index');
Route::get('/home-camp', [PageFrontend::class, 'pagePenyediaJasa'])->name('home-camp');
Route::get('/home-camp/{detail_id}', [PageFrontend::class, 'pageDetailProduk'])->name('home-camp.detail');
Route::get('/hotel', [PageFrontend::class, 'pageHotel'])->name('hotel');
Route::get('/detail-hotel/{location_id}', [PageFrontend::class, 'pageDetailHotel'])->name('detail.hotel');
Route::get('/pendaftaran', [DaftarController::class, 'pendaftaran'])->name('pendaftaran');
Route::get('/auth/signup/konfirmasi/{token}', [DaftarController::class, 'aktifasiPendaftaran']);
Route::post('/pendaftaran/berhasil', [DaftarController::class, 'pendaftaranBaru'])->name('pendaftaran.baru');

Route::group(['prefix' => '/auth/master', 'as' => 'admin.'], function(){
    Route::get('/masuk', [LoginController::class, 'getLogin'])->name('login');
    Route::post('/masuk', [LoginController::class, 'postLogin']);

    Route::group(['middleware' => 'auth:masterauth'], function() {

        Route::get('/dashboard', [AdministratorController::class, 'index'])->name('dashboard');
        Route::get('/pengguna', [AdministratorController::class, 'halamanPengguna'])->name('pengguna');
        Route::get('/review', [AdministratorController::class, 'halamanReview'])->name('review');
        
        Route::group(['prefix' => 'penyedia-jasa'], function() {
            Route::get('/', [AdministratorController::class, 'halamanPenyediaJasa'])->name('penyedia-jasa');
            Route::post('/save', [AdministratorController::class, 'halamanPenyediaJasaSave'])->name('penyedia-jasa.save');
        });

        Route::group(['prefix' => 'barang'], function() {
            Route::get('/', [AdministratorController::class, 'halamanBarang'])->name('barang');
            Route::post('/save', [AdministratorController::class, 'halamanBarangSave'])->name('barang.save');
        });

        Route::group(['prefix' => 'blog'], function() {
            Route::get('/', [AdministratorController::class, 'halamanBlog'])->name('blog');
            Route::post('/save', [AdministratorController::class, 'halamanBlogSave'])->name('blog.save');
        });

        Route::post('/logout', [LoginController::class, 'postLogout'])->name('keluar');

    });

});