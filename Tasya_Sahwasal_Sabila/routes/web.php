<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', [BiodataController::class, 'index']);
<<<<<<< HEAD
=======

Route::get('/home', function () {
    return view('home');
});

Route::get('/about_tisa', function () {
    return view('about_tisa');
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
>>>>>>> dbfa4438fc3785e0289c9bd1fbe422bc1fec32e4
