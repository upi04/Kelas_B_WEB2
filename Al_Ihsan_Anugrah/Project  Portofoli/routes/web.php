<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\MessageController;

Route::get('/biodata/home', [HomeController::class, 'biodata']);
Route::get('/biodata/blog', [BlogController::class, 'biodata']);
Route::get('/biodata/skill', [SkillController::class, 'biodata']);
Route::get('/biodata/message', [MessageController::class, 'biodata']);
