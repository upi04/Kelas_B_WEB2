<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\Bahasa_programController;
use App\Http\Controllers\HumanController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Database\Seeders\humanSeeder;

Route::controller(viewController::class)->group(function(){
    Route::get('/','index');
    Route::get('/about','about');
    Route::get('/contact','contact');
    Route::get('/project','project');
    Route::get('/skill','skill');
    Route::get('/produk','produk');
});


Route::get('/biodata', [BiodataController::class, 'biodata']);
Route::get('/bahasa-program', [BiodataController::class, 'bahasa_program']);
Route::get('/home', [BiodataController::class, 'index']);
Route::get('/blog', [BiodataController::class, 'blog']);
Route::get('/message', [BiodataController::class, 'message']);

Route::resource('students', StudentController::class);

Route::get('/humans', [HumanController::class, 'index']);
