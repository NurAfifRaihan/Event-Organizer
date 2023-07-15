<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\BookingController;

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

Route::get('/dashboard/daftar', [DaftarController::class, 'index'])->middleware('auth');
Route::get('/dashboard/daftar/create', [DaftarController::class, 'create'])->middleware('auth');
Route::post('/dashboard/daftar/store', [DaftarController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/daftar/destroy/{id}', [DaftarController::class, 'destroy'])->middleware('admin');
Route::get('/dashboard/daftar/edit/{id}', [DaftarController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/daftar/update/{id}', [DaftarController::class, 'update'])->middleware('admin');
Route::get('/dashboard/daftar/show/{id}', [DaftarController::class, 'show'])->middleware('auth');

//Route kegiatan

Route::get('/dashboard/kegiatan', [KegiatanController::class, 'index'])->middleware('auth');
Route::get('/dashboard/kegiatan/create', [KegiatanController::class, 'create'])->middleware('auth');
Route::post('/dashboard/kegiatan/store', [KegiatanController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/kegiatan/destroy/{id}', [KegiatanController::class, 'destroy'])->middleware('admin');
Route::get('/dashboard/kegiatan/edit/{id}', [KegiatanController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/kegiatan/update/{id}', [KegiatanController::class, 'update'])->middleware('admin');
Route::get('/dashboard/kegiatan/show/{id}', [KegiatanController::class, 'show'])->middleware('auth');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home3', [LandingpageController::class, 'index']);
Route::get('/booking', [BookingController::class, 'index']);
Route::middleware(['auth', 'admin'])->group(function () {
    // Tambahkan rute yang hanya bisa diakses oleh admin di sini
});

