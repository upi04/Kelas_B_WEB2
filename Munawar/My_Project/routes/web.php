<?php

use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

Route::controller(viewController::class)->group(function(){
    Route::get('/','index');
    Route::get('/about','about');
    Route::get('/contact','contact');
    Route::get('/project','project');
    Route::get('/skill','skill');
});
