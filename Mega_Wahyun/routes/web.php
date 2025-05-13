<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\biodataController;

Route::get('/biodata', [BiodataController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
