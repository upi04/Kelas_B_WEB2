<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', [BiodataController::class, 'index']);

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