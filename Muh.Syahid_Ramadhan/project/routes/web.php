<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;

// Halaman utama (opsional)
Route::get('/', function () {
    return view('welcome');
});

// Route untuk daftar mahasiswa
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Route untuk daftar buku
Route::get('/books', [BookController::class, 'index'])->name('books.index');

