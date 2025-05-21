<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\BiodataController; 

Route::get('/', function () {
    return view(view: 'home');
});

Route::get('/biodata', [BiodataController::class, 'index']);

Route::get('/about', action: function ():view {
    return view(view: 'about');
});
Route::get('/skills', action: function ():view {
    return view(view: 'skills');
});

Route::get('/projects', action: function ():view {
    return view(view: 'projects');
});

Route::get('/home', action: function ():view {
    return view(view: 'home');
});

Route::get('/contact', action: function ():view {
    return view(view: 'contact');
});