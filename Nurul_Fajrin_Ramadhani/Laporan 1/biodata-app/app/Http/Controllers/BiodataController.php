<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function show()
    {
        $nama = 'Nurul Raehan';  // ganti dengan nama lengkapmu
        $nim = '60200123056';     // ganti dengan NIM kamu

        return "$nama, $nim";
    }
}
