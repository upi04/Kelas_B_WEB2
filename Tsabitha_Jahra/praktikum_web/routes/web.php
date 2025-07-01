<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;

// Routing untuk halaman utama
Route::get('/', function () {
    return redirect('/mahasiswa');
});

// Routing Mahasiswa (CRUD)
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');

// Routing lainnya
Route::get('/home', [HomeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/{id}', [SkillController::class, 'show']);
Route::get('/messages', [MessageController::class, 'index']);
Route::get('/messages/{id}', [MessageController::class, 'show']);

// Soft delete (trash) routes
Route::get('/mahasiswa/trash', [MahasiswaController::class, 'trash']);
Route::get('/mahasiswa/restore/{id}', [MahasiswaController::class, 'restore']);
Route::delete('/mahasiswa/forceDelete/{id}', [MahasiswaController::class, 'forceDelete']);