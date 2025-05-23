<?php

use App\Http\Controllers\biodataController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

// Route::get('/biodata', [biodataController::class, 'show']);

Route::controller(viewController::class)->group(function(){
    Route::get('/','about');
    Route::get('/about','about');
    Route::get('/contact','contact');
    Route::get('/projects','projects');
    Route::get('/skills','skills');
});