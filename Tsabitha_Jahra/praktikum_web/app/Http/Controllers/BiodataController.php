<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function show()
    {
        $nama = 'Tsabitha Jahra'; 
        $nim = '60200123074';     

        return "Saya $nama, dengan NIM $nim";
    }
}
