<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function biodata()
    {
        $biodata = [
            'nama' => 'Warda Khairah',
            'tempat' => 'Lemoa',
            'tanggallahir' => '21 Mei 2005',
            'jeniskelamin' => 'Perempuan',
            'alamat' => 'Jl. Poros Sapaya, Lemoa desa pattallikang Kec. Manuju Kab.Gowa',
            'pendidikan' => 'S1 Teknik Informatika - UIN ALAUDDIN MAKASSAR',
            'hobi' => 'Membaca, Hiking, Traveling',
            'cita-cita' => 'Masuk Surga',
            'pengalamanorganisasi' => 'OSPSH, Sanggar Seni',
        ];

        return view('about', compact('biodata'));
    }

    public function contact(){
        $biodata = [
            "email" => "khairahwarda@gmail.com",
            "telepon" => "0821-5679-8989",
            "instagram" => "@wrdaa.khairah"
        ];
        return view('contact', compact('biodata'));
    }


    public function skills(){
        $keahlian = "HTML, Laravel, Php";
        return view('skills', compact('keahlian'));
    }

    public function project(){
        $projects = [
            'nama1' => 'Sistem Reservasi Fast Food',
            'nama2' => 'Aplikasi Game FactQuest (Quiz Pengetahuan)',
        ];
        return view('projects', compact('projects'));
    }
}


