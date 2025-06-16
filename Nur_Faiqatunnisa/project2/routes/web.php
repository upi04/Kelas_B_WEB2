<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\contohControler;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;

use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;


Route::get('/biodata', [BiodataController::class, 'show']);
Route::get('/home', [HalamanController::class, 'home']);
Route::get('/about', [HalamanController::class, 'about']);
Route::get('/projects', [HalamanController::class, 'projects']);
Route::get('/skills', [HalamanController::class, 'skills']);
Route::get('/contact', [HalamanController::class, 'contact']);

Route::get('/produk', [contohControler::class,'index']);

Route::get('/home/biodata', [HomeController::class, 'biodata']);
Route::get('/blog/biodata', [BlogController::class, 'biodata']);
Route::get('/skill/biodata', [SkillController::class, 'biodata']);
Route::get('/message/biodata', [MessageController::class, 'biodata']);

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::resource('books', BookController::class);
Route::resource('students', StudentController::class);


