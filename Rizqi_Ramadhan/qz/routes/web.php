<?php

use App\Http\Controllers\biodata;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BiodataController;
use App\Http\Controllers\contohcontroller;

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


Route::get('/biodata', [biodata::class, 'biodata']);

Route::get('/bahasa',[biodata::class,'Bahasa_Pemrograman']);