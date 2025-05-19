<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', [BiodataController::class, 'index']);

Route::get('/about', action: function ():view {
    return view(view: 'about');
});
Route::get('/skill', action: function ():view {
    return view(view: 'skill');
});
Route::get('/about_warda', action: function ():view {
    return view(view: 'about_warda');
});