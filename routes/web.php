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
    return view('welcome');
});

Route::get('/masuk', [LoginController::class, 'getLogin'])->name('login');

Route::group(['prefix' => '/auth/master', 'as' => 'admin.'], function(){

    Route::get('/dashboard', [AdministratorController::class, 'index'])->name('dashboard');
    Route::get('/pengguna', [AdministratorController::class, 'halamanPengguna'])->name('pengguna');

});