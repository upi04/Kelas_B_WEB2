<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/mahasiswa');
});

//  Route untuk menampilkan SEMUA mahasiswa (Read)
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route untuk menampilkan FORM tambah mahasiswa (Create Form)
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);

// Route untuk MENYIMPAN data mahasiswa baru dari form (Store Data)
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');