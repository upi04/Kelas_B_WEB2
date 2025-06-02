<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;

Route::get('/home/biodata', [HomeController::class, 'biodata']);
Route::get('/blog/biodata', [BlogController::class, 'biodata']);
Route::get('/skill/biodata', [SkillController::class, 'biodata']);
Route::get('/message/biodata', [MessageController::class, 'biodata']);
