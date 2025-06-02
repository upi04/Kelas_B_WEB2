<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\contohcontroler;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view(view: 'home');
});

Route::get('/about', [HomeController::class, 'biodata']);

Route::get('/skills', [HomeController::class, 'skills']);

Route::get('/projects', [HomeController::class, 'project']);


Route::get('/home', action: function ():view {
    return view(view: 'home');
});

Route::get('/contact', [HomeController::class, 'contact']);


route::get('/produk', [contohcontroler::class,'index']);

route::get('/biodata', [HomeController::class,'biodata']);
   
