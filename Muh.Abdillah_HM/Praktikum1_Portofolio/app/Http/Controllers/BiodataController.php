<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $namaLengkap = "Muh. Abdillah HM."; // Ganti dengan Nama Lengkap Anda
        $nim = "60200123040"; // Ganti dengan Nomor Induk Mahasiswa Anda

        return $namaLengkap . ", dengan " . $nim;
    }
}
