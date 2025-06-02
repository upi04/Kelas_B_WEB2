<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\contohcontroler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MessageController;

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

Route::get('/yamaha', [contohcontroler::class, 'index']);

Route::get('/home/biodata', [HomeController::class, 'biodata']);
Route::get('/blog/biodata', [BlogController::class, 'showBiodata']);
Route::get('/message/biodata', [MessageController::class, 'profile']);