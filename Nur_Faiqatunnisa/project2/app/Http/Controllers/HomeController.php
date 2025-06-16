<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function biodata()
    {
        $biodata = $this->getBiodata();
        return view('biodata', compact('biodata'));
    }

    private function getBiodata()
    {
        return [
            'nama' => 'Nur Faiqatunnisa',
            'ttl' => 'Sinjai, 20 juli 2005',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Jl. Persatuan, Sinjai Utara',
            'email' => 'faiqatunnisa@gmail.com',
            'telepon' => '082346874142',
            'pendidikan' => 'TEKNIK INFORMATIKA - UNIVERSITAS ISLAM NEGERI ALAUDDIN MAKASSAR',
            'hobi' => 'Desain Grafis',
            'cita_cita' => 'Data Analyst',
            'keahlian' => 'html,CSS, Canva',
            'pengalaman_organisasi' => 'member inready Workgroup'
        ];
    }
}
