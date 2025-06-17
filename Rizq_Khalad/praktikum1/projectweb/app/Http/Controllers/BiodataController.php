<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $nama = "Rizq Khalad";
        $nim = "60200123093";
        return view('biodata', compact('nama', 'nim'));
    }
}