<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/home', [ProfileController::class, 'home']);
Route::get('/blog', [ProfileController::class, 'blog']);
Route::get('/skill', [ProfileController::class, 'skill']);
Route::get('/message', [ProfileController::class, 'message']);
Route::get('/biodata', [ProfileController::class, 'biodata']);