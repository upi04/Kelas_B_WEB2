<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/biodata', [BiodataController::class, 'show']);

Route::get('/about', function(){
    return view('about');
});
Route::get('/welcome', function(){
    return view('welcome');
});
Route::get('/projects', function(){
    return view('projects');
});
Route::get('/skills', function(){
    return view('skills');
});
Route::get('/contact', function(){
    return view('contact');
});