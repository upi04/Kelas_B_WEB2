<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\contohControler;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;

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
