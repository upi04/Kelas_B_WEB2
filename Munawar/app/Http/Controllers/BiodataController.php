<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $nama = "Munawar";
        $nim = "60200123067";

        return view('biodata', compact('nama', 'nim'));
    }
}
