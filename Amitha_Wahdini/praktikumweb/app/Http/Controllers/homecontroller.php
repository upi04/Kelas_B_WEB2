<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showBiodata()
    {
        $biodata = [
            'nama' => 'Amitha Wahdini',
            'ttl' => 'Toraja,22 Oktober 20004',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Tana Toraja',
            'email' => 'amithamangenda@gmail.com',
            'telepon' => '082193886936',
            'pendidikan' => 'S1 Teknik Informatika',
            'hobi' => 'Menyanyi,Bermain Bulutangkis',
            'cita_cita' => 'Designer',
            'organisasi' => '',
        ];

        return view('biodataku', ['biodata' => $biodata]);
    }
}

