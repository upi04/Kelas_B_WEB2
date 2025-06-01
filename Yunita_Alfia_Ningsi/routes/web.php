<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contohcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/aboutnita', function () {
    return view('aboutnita');
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

route::get('/produk',[contohcontroller::class,'index']);

Route::get('/home', [HomeController::class, 'home']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/skill', [SkillController::class, 'skill']);
Route::get('/message', [MessageController::class, 'message']);