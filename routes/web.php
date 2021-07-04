<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('front-layouts/home');
});

Route::get('/masuk', [LoginController::class, 'getLogin'])->name('login');

Route::group(['prefix' => '/auth/master', 'as' => 'admin.'], function(){

    Route::get('/dashboard', [AdministratorController::class, 'index'])->name('dashboard');
    Route::get('/pengguna', [AdministratorController::class, 'halamanPengguna'])->name('pengguna');
    
    Route::group(['prefix' => 'penyedia-jasa'], function() {
        Route::get('/', [AdministratorController::class, 'halamanPenyediaJasa'])->name('penyedia-jasa');
        Route::post('/save', [AdministratorController::class, 'halamanPenyediaJasaSave'])->name('penyedia-jasa.save');
    });

    Route::group(['prefix' => 'barang'], function() {
        Route::get('/', [AdministratorController::class, 'halamanBarang'])->name('barang');
        Route::post('/save', [AdministratorController::class, 'halamanBarangSave'])->name('barang.save');
    });
});