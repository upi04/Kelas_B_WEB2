<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('mahasiswa', MahasiswaController::class);

// Route::get('/mahasiswa/trash', [MahasiswaController::class, 'trash'])->name('mahasiswa.trash');
// Route::post('/mahasiswa/{id}/restore', [MahasiswaController::class, 'restore'])->name('mahasiswa.restore');
// Route::delete('/mahasiswa/{id}/force-delete', [MahasiswaController::class, 'forceDelete'])->name('mahasiswa.forceDelete');


Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);

// POST digunakan untuk mengirim dan menyimpan data ke server, contohnya menyimpan data dari form input.
Route::post('/mahasiswa',[MahasiswaController::class,'store']);

// GET digunakan untuk menampilkan data dari server, contohnya daftar mahasiswa.
Route::get('/mahasiswa',[MahasiswaController::class,'index']);

Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class,'edit']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class,'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class,'destroy']);

// Tampilkan halaman trash
Route::get('/mahasiswa/trash', [MahasiswaController::class, 'trash'])->name('mahasiswa.trash');

// Restore data
Route::get('/mahasiswa/{id}/restore', [MahasiswaController::class, 'restore'])->name('mahasiswa.restore');

// Hapus permanen
Route::delete('/mahasiswa/{id}/force', [MahasiswaController::class, 'forceDelete'])->name('mahasiswa.forceDelete');

   
