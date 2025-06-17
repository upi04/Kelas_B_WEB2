<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biodata extends Controller
{
   public function biodata()
    {
        $biodata = [
            'Nama' => 'Rizqi Ramadhan',
            'Tempat, Tanggal Lahir' => 'Watampone, 28 September 2006',
            'Jenis Kelamin' => 'Laki-laki',
            'Alamat' => 'Jl. Majang',
            'Email' => 'rizqiramadhan@gmail.com',
            'Telepon' => '081234567890',
            'Pendidikan' => 'S1 Teknik Informatika - UIN Alauddin Makassar',
            'Hobi' => 'Ngoding, Desain, Musik',
            'Cita-cita' => 'Software Engineer',
            'Keahlian' => 'Laravel, Vue.js, Arduino, ESP32',
        ];
        return view('biodata.biodata', compact('biodata'));    
    }
}

