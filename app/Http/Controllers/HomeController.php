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
            'Nama' => 'Nur Aisyah s',
            'Nama Panggilan' => 'Ica',
            'Tempat, Tanggal Lahir' => 'Bontotene, 04 April 2005',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'Bontotene, Gowa',
            'Email' => 'nuraisya995@gmail.com',
            'Telepon' => '085251586240',
            'Pendidikan' => 'S1 Jurusan Teknik Informatika',
            'Hobi' => 'Nonton Film dan Dengar Musik',
            'Cita Cita' => 'Menjadi ibu kos',
            'Keahlian' => 'Makan',
            'Pengalaman Organisasi' => 'Drumband ajah',
        ];

        return view('dashboard', compact('title', 'deskripsi', 'fitur'));

    }
}