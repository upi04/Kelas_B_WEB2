<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/biodata', function () {
    return view('welcome');
});
=======
Route::get('/Biodata Amitha', function () {
    return view('contact');
});



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



>>>>>>> dbfa4438fc3785e0289c9bd1fbe422bc1fec32e4
