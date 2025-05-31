<?php

use App\Http\Controllers\biodataController;
use App\Http\Controllers\contohcontroller;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;


Route::get('/biodata', [biodataController::class, 'show']);
Route::get('/biodata/pribadi', [HomeController::class, 'index']);

Route::controller(viewController::class)->group(function(){
    Route::get('/','about');
    Route::get('/about','about');
    Route::get('/contact','contact');
    Route::get('/projects','projects');
    Route::get('/skills','skills');
});

Route::get('/produk',[contohcontroller::class,'index']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);

Route::get('/skills', [SkillController::class, 'index']);
Route::get('/skills/{id}', [SkillController::class, 'show']);

Route::get('/messages', [MessageController::class, 'index']);
Route::get('/messages/{id}', [MessageController::class, 'show']);

