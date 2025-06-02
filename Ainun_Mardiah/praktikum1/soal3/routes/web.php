<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return view('biodata', [
        'nama' => 'Ainun Mardia',
        'nim' => '60200123044',
    ]);
});
