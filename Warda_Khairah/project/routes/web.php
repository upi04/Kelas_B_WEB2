<?php

use App\Http\Controllers\Book;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\contohcontroler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view(view: 'home');
});

Route::get('/about', [HomeController::class, 'biodata']);

Route::get('/skills', [HomeController::class, 'skills']);

Route::get('/projects', [HomeController::class, 'project']);


Route::get('/home', action: function ():view {
    return view(view: 'home');
});

Route::get('/contact', [HomeController::class, 'contact']);


route::get('/produk', [contohcontroler::class,'index']);

route::get('/biodata', [HomeController::class,'biodata']);

Route::get('/books', [Book::class, 'index'])->name('books.index');

Route::get('/student', [StudentController::class, 'index'])->name('student.index');

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

   
