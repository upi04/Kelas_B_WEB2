<?php

use App\Http\Controllers\BiodataController;

Route::get('/biodata', [BiodataController::class, 'show']);
