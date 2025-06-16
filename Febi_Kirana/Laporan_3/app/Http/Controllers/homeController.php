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
            'Nama' => 'FEBI KIRANA',
            'Nama Panggilan' => 'PEBI',
            'Tempat, Tanggal Lahir' => 'Bontoramba,06 Maret 2004',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'jl. poros malino,Mawang,Gowa',
            'Email' => 'febi663kirana@gmail.com',
            'Telepon' => '0854321789',
            'Pendidikan' => 'S1 Jurusan Teknik Informatika',
            'Hobi' => 'liat sunset di pantai',
            'Cita Cita' => 'Menjadi Milyader',
            'Keahlian' => 'membully',
            'Pengalaman Organisasi' => 'ROHIS REMASTA',
        ];

        return view('dashboard', compact('title', 'deskripsi', 'fitur'));

    }
}