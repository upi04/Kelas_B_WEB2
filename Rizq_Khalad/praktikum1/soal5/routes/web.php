<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;



Route::get('/about_rizqkhalad', function(){
    return view('about_rizqkhalad');
});
Route::get('/about', function(){
    return view('welcome');
});