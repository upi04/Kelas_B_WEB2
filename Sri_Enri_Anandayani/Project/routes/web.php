<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/biodata',[BiodataController::class, 'index']);
Route::get('/cantikk', function () {return view('about');});
