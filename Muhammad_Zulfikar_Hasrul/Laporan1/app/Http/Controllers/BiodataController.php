<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function show()
    {
        $nama = "Muhammad Zulfikar Hasrul";
        $nim = "60200123050";

        return "Nama: $nama, NIM: $nim";
    }
}
