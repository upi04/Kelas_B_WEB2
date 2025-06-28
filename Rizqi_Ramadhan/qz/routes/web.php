<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Default home pages
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/skills', function () {
    return view('skills');
});
Route::get('/contact', function () {
    return view('contact');
});

// Pertemuan 4
Route::get('/home', [ProfileController::class, 'home']);
Route::get('/blog', [ProfileController::class, 'blog']);
Route::get('/skill', [ProfileController::class, 'skill']);
Route::get('/message', [ProfileController::class, 'message']);
Route::get('/biodata', [ProfileController::class, 'biodata']);

// Pertemuan 5
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Pertemuan 6
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

// Soft delete (trash) routes
Route::get('/mahasiswa/trash', [MahasiswaController::class, 'trash']);
Route::get('/mahasiswa/restore/{id}', [MahasiswaController::class, 'restore']);
Route::delete('/mahasiswa/forceDelete/{id}', [MahasiswaController::class, 'forceDelete']);
//