<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController; 

Route::get('/', function () {
    return view('about');
});

Route::get('/biodata', [BiodataController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/skills', function () {
    return view('skills');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});