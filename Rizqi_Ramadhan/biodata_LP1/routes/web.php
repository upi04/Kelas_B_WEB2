<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BiodataController;

Route::get('/', [BiodataController::class, 'index']);

Route::get('/about_rizqi', function(){
    return view('about_rizqi');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/projects', function(){
    return view('projects');
});

Route::get('/skill', function(){
    return view('skill');
});