<?php

use App\Http\Controllers\admin\AnggotadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BukuController;
use App\Http\Controllers\admin\PenerbitController;
use App\Http\Controllers\admin\PeminjamanController;
use App\Http\Controllers\user\DashboardController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
});

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    //anggota
    Route::get('/anggota', [AnggotadController::class, 'index'])->name('aggota.index');
    Route::post('/anggota/add', [AnggotadController::class, 'store'])->name('anggota.add');
    Route::put('/anggota/edit/{id}', [AnggotadController::class, 'update'])->name('anggota.update');
    Route::delete('anggota/delete/{id}', [AnggotadController::class, 'destroy'])->name('anggota.delete');
    //admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/administrator/add', [AdminController::class, 'store'])->name('admin.add');
    Route::put('/administrator/edit/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/administrator/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    //peminjaman
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    //penerbit
    Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit.index');
    Route::post('/penerbit/add', [PenerbitController::class, 'store'])->name('penerbit.add');
    Route::put('/penerbit/edit/{id}', [PenerbitController::class, 'update'])->name('penerbit.update');
    Route::delete('/penerbit/delete/{id}', [PenerbitController::class, 'destroy'])->name('penerbit.delete');

    //kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::post('/kategori/add', [KategoriController::class, 'store'])->name('kategori.add');
    Route::put('/kategori/edit/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');
    //buku
    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::post('/buku/add', [BukuController::class, 'store'])->name('buku.add');
    Route::put('/buku/edit/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.delete');


});
