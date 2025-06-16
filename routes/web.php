<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);

Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/{id}', [SkillController::class, 'show']);

Route::get('/messages', [MessageController::class, 'index']);
Route::get('/messages/{id}', [MessageController::class, 'show']);
=======
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
>>>>>>> 5882177 (Laporan 4)
