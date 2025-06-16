<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contohcontroller;

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