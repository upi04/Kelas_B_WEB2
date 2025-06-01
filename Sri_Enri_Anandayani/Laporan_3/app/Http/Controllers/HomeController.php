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
        // Contoh data yang dikirim ke view
        $title = 'Halaman Beranda';
        $deskripsi = 'Biodata Diri';
        $fitur = [
            'Nama' => 'Sri Enri Anandayani',
            'Tempat, Tanggal Lahir' => 'Bulo-Bulo, 10 Maret 2006',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'Tamarunang indah 1',
            'Email' => 'srenrianandayani123@gmail.com',
            'Telepon' => '081253585049',
            'Pendidikan' => 'S1 Teknik Informatika',
            'Hobi' => 'Masak',
            'Cita Cita' => 'Jadi orang kaya',
            'Keahlian' => 'Tidur',
            'Pengalaman' => 'Tidak Ada',
        ];

        return view('dashboard', compact('title', 'deskripsi', 'fitur'));
    }
}
