<?php

use App\Http\Controllers\controller;
use App\Http\Controllers\controller3;
use App\Http\Controllers\controller2;
use App\Http\Controllers\controller1;
use App\Http\Controllers\karyasiswaController;
use App\Http\Controllers\kritiksaranController;
use App\Http\Controllers\akunsiswaController;
use App\Http\Controllers\infolombaController;
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

Route::get('/', [controller1::class, 'dashboard']);
Route::get('/dashboard', [controller1::class, 'dashboard']);

Route::get('/event', [controller1::class, 'event']);

Route::get('/akunsiswa',[akunsiswaController::class, 'index']);
Route::get('/editakun', [akunsiswaController::class, 'edit']);
Route::get('/tambahakun',[akunsiswaController::class, 'create']);
Route::post('/store', [akunsiswaController::class, 'store']);

Route::get('/infolomba',[infolombaController::class, 'index']);
Route::get('/tambahevent',[infolombaController::class, 'create']);
Route::post('/insertevent', [infolombaController::class, 'store']);

Route::get('/karyasiswa',[karyasiswaController::class, 'index']);
Route::get('/tambahkarya',[karyasiswaController::class, 'create']);
Route::post('/insertkarya', [karyasiswaController::class, 'store']);

Route::get('/kritiksaran',[kritiksaranController::class, 'index']);
Route::get('/tambahkritik',[kritiksaranController::class, 'create']);
Route::post('/insertkritiksaran', [kritiksaranController::class, 'store']);

Route::get('/programkerja', [controller1::class, 'programkerja']);
Route::get('/login', [controller2::class, 'login']);
Route::get('/register', [controller3::class, 'register']);

Route::post('/register', [controller3::class, 'store']);
Route::post('/simpan_akunsiswa', [akunsiswaController::class, '']);