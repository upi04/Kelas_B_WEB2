<?php

use App\Http\Controllers\biodataController;
use Illuminate\Support\Facades\Route;

Route::get('/biodata', [biodataController::class, 'show']);