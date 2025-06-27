<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
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

// Route::get('/biodata', [Biodata::class, 'Biodata']);
// // Route::get('/bahasa', [Biodata::class, 'Bahasa_Pemrograman']);
//pertemuan 4
Route::get('/home', [ProfileController::class, 'home']);
Route::get('/blog', [ProfileController::class, 'blog']);
Route::get('/skill', [ProfileController::class, 'skill']);
Route::get('/message', [ProfileController::class, 'message']);
Route::get('/biodata', [ProfileController::class, 'biodata']);

//pertemuan 5
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Lap 5
/* 
GET:Untuk mengambil data. Data dikirim via URL, cocok untuk permintaan 
    yang bisa diulang dan di-cache. Contohnya itu memuat halaman web, mencari di Google.
POST:Untuk mengirim data ke server, seperti mengisi formulir. Data 
     dikirim di body permintaan, tidak terlihat di URL.
*/

//pertemuan 6
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']); 
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);
