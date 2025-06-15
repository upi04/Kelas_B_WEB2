<?php

use App\Http\Controllers\Book;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\contohcontroler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view(view: 'home');
});

Route::get('/about', [HomeController::class, 'biodata']);

Route::get('/skills', [HomeController::class, 'skills']);

Route::get('/projects', [HomeController::class, 'project']);


Route::get('/home', action: function ():view {
    return view(view: 'home');
});

Route::get('/contact', [HomeController::class, 'contact']);


route::get('/produk', [contohcontroler::class,'index']);

route::get('/biodata', [HomeController::class,'biodata']);

Route::get('/books', [Book::class, 'index'])->name('books.index');

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
   
