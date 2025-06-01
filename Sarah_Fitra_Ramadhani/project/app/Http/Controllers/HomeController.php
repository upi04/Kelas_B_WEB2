<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function __construct()
    {

    }

    public function index()
    {
        $title = 'Halaman Beranda';
        $deskripsi = 'Biodata Diri';
        $fitur = [
            'Nama' => 'Sarah Fitra Ramadhani',
            'Nama Panggilan' => 'Sarah',
            'Tempat, Tanggal Lahir' => 'Makassar, 30 Oktober 2005',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'Pallangga,Gowa',
            'Email' => 'sarahfitraramadhani3010@gmail.com',
            'Telepon' => '082343515698',
            'Pendidikan' => 'S1 Teknik Informatika',
            'Hobi' => 'Nonton Film dan Dengar Musik',
            'Cita Cita' => 'Menjadi orng yang berguna',
            'Keahlian' => 'Makan',
            'Pengalaman Organisasi' => 'BS27(Bengkel Seni 27 SMAN 4 GOWA)',
        ];

        return view('dashboard', compact('title', 'deskripsi', 'fitur'));

    }
}