<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KegiatanController;

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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

//Route Daftar

Route::get('/daftar', [DaftarController::class, 'index']);
Route::get('/daftar/create', [DaftarController::class, 'create']);
Route::post('/daftar/store', [DaftarController::class, 'store']);
Route::delete('/daftar/destroy/{id}', [DaftarController::class, 'destroy']);
Route::get('/daftar/edit/{id}', [DaftarController::class, 'edit']);
Route::put('/daftar/update/{id}', [DaftarController::class, 'update']);
Route::get('/daftar/show/{id}', [DaftarController::class, 'show']);

//Route kegiatan

Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/kegiatan/create', [KegiatanController::class, 'create']);
Route::post('/kegiatan/store', [KegiatanController::class, 'store']);
Route::delete('/kegiatan/destroy/{id}', [KegiatanController::class, 'destroy']);
Route::get('/kegiatan/edit/{id}', [KegiatanController::class, 'edit']);
Route::put('/kegiatan/update/{id}', [KegiatanController::class, 'update']);
Route::get('/kegiatan/show/{id}', [KegiatanController::class, 'show']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
