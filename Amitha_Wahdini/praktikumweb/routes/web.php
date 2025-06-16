<?php

use Illuminate\Support\Facades\Route;

// Route::get('/biodata', function () {
//     return view('welcome');
// });
// =======
// Route::get('/Biodata Amitha', function () {
//     return view('contact');
// });



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// routes/web.php

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/home', function () {
    return view('home');
})->name('home');

use App\Http\Controllers\homecontroller;

Route::get('/biodataku', [homecontroller::class, 'showBiodata']);

Route::resource('books', App\Http\Controllers\BookController::class);
Route::resource('students', App\Http\Controllers\StudentController::class);




