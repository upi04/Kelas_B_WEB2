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
            'Nama' => 'Muh. Syahid Ramadhan',
            'Nama Panggilan' => 'Syahid',
            'Tempat, Tanggal Lahir' => 'Makassar,15 Oktober 2005',
            'Jenis Kelamin' => 'Laki Laki',
            'Alamat' => 'Manjalling',
            'Email' => 'syhidramadhan55@gmail.com',
            'Telepon' => '082346827742',
            'Pendidikan' => 'S1 Jurusan Teknik Informatika',
            'Hobi' => 'Olahraga',
            'Cita Cita' => 'Polisi',
            'Keahlian' => 'Makan',
            'Pengalaman Organisasi' => 'futsal',
        ];

        return view('dashboard', compact('title', 'deskripsi', 'fitur'));

    }
}