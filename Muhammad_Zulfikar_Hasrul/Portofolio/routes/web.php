<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', action: [BiodataController::class, 'show']);

Route::get('/home', function () {
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

Route::get('/biodata-home', [HomeController::class, 'biodata'])->name('biodata.home');
Route::get('/biodata-blog', [BlogController::class, 'biodata'])->name('biodata.blog');
Route::get('/biodata-skill', [SkillController::class, 'biodata'])->name('biodata.skill');
Route::get('/biodata-message', [MessageController::class, 'biodata'])->name('biodata.message');


Route::get('/biodatadiri/biodata', function () {
    return view('biodatadiri/biodata');
});

Route::get('/biodatadiri/home', function () {
    return view('biodatadiri/home');
});

Route::get('/laporan4/books', [BookController::class, 'index']);
Route::get('/laporan4/students', [StudentController::class, 'index']);

