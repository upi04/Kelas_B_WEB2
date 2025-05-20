<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function show()
    {
        $nama = 'Nur Faiqatunnisa'; // Ganti dengan nama lengkap Anda
        $nim = '60200123053';       // Ganti dengan NIM Anda
        $kalimat = "$nama dengan NIM $nim";
        
        return view('biodata', compact('kalimat'));
    }
}
