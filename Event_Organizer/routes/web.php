<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LandingpageController;

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

Route::get('/dashboard/daftar', [DaftarController::class, 'index']);
Route::get('/dashboard/daftar/create', [DaftarController::class, 'create']);
Route::post('/dashboard/daftar/store', [DaftarController::class, 'store']);
Route::delete('/dashboard/daftar/destroy/{id}', [DaftarController::class, 'destroy']);
Route::get('/dashboard/daftar/edit/{id}', [DaftarController::class, 'edit']);
Route::put('/dashboard/daftar/update/{id}', [DaftarController::class, 'update']);
Route::get('/dashboard/daftar/show/{id}', [DaftarController::class, 'show']);

//Route kegiatan

Route::get('/dashboard/kegiatan', [KegiatanController::class, 'index']);
Route::get('/dashboard/kegiatan/create', [KegiatanController::class, 'create']);
Route::post('/dashboard/kegiatan/store', [KegiatanController::class, 'store']);
Route::delete('/dashboard/kegiatan/destroy/{id}', [KegiatanController::class, 'destroy']);
Route::get('/dashboard/kegiatan/edit/{id}', [KegiatanController::class, 'edit']);
Route::put('/dashboard/kegiatan/update/{id}', [KegiatanController::class, 'update']);
Route::get('/dashboard/kegiatan/show/{id}', [KegiatanController::class, 'show']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home3', [LandingpageController::class, 'index']);
