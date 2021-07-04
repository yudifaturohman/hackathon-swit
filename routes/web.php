<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/hotel', [PageFrontend::class, 'pageHotel'])->name('hotel');

Route::get('/masuk', [LoginController::class, 'getLogin'])->name('login');

Route::get('/dashboard', [AdministratorController::class, 'index'])->name('dashboard');

