<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $biodata = [
            'Nama' => 'Nur Aisyah S',
            'Nama Panggilan' => 'Ica',
            'Tempat, Tanggal Lahir' => 'Bontotene, 04 April 2005',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'Bontotene, Gowa',
            'Email' => 'nuraisya995@gmail.com',
            'Telepon' => '085251586240',
            'Pendidikan' => 'S1 Teknik Informatika',
            'Hobi' => 'Makan Dengar Musik',
            'Cita Cita' => 'Menjadi Ibu Kos',
            'warna Favorit' => 'Merah Menyalahh',
            'Keahlian' => 'Makan',
            'Pengalaman Organisasi' => 'DrumBand ajah'
        ];

        return view('dashboard', [
            'title' => 'Halaman Beranda',
            'deskripsi' => 'Biodata Diri',
            'biodata' => $biodata
        ]);
    }
}