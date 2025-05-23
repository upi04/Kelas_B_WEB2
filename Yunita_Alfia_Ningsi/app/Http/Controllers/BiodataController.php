<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function show()
    {
        $nama = "[Yunita Alfia Ningsi]";
        $nim = "60200123070";

        return "$nama, dengan NIM $nim";
    }
}
