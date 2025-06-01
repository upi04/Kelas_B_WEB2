<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HalamanController;

Route::get('/biodata', [BiodataController::class, 'show']);
Route::get('/home', [HalamanController::class, 'home']);
Route::get('/about', [HalamanController::class, 'about']);
Route::get('/projects', [HalamanController::class, 'projects']);
Route::get('/skills', [HalamanController::class, 'skills']);
Route::get('/contact', [HalamanController::class, 'contact']);
