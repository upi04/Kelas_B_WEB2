<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function biodata()
    {
        $data = [
            'nama' => 'Rizq Khalad',
            'ttl' => 'Tanete, 28 Desember 2005',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Poros Tanete, Sulsel',
            'email' => 'rizkhalad@gmail.com',
            'telepon' => '081234567890',
            'pendidikan' => 'UIN Alauddin Makassar - Teknik Informatika',
            'hobi' => 'Bermain motor dan oprek mesin',
            'cita_cita' => 'Engineer Motor Balap',
            'keahlian' => 'Mekanik, Web Developer',
            'pengalaman_organisasi' => 'OSIS SMA & Panitia Event Pondok'
        ];

        return view('biodata', compact('data'));
    }
}