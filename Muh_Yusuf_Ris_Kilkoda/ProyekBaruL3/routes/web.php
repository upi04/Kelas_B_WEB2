<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;


Route::view('/home','home');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about', ['nama'=>'Yusuf']);
});

Route::get('/blod', function(){
    return view('/blod', ['judul1'=>'Hari ini','judul2'=>'hari esok']);
});

// Route untuk menampilkan biodata
Route::get('/biodata', [BiodataController::class, 'index']);
