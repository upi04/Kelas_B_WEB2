<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $home = $this->getBiodata();
        $link = $this->getLink();
        return view('lap3.home', compact('home', 'link'));
    }

    private function getBiodata()
    {
        return [
            'Nama' => 'Yunita Alfia Ningsi',
            'Tempat, Tanggal Lahir' => 'Bantaeng, 31 Maret 2005',
            'Jenis Kelamin' => 'Perempuan',
            'Alamat' => 'Pattallassang, Kec. Tompobulu, Kab. Bantaeng',
            'Email' => 'ns2662331@gmail.com',
            'Telepon' => '081523611137',
            'Pendidikan' => 'Mahasiswi S1 Teknik Informatika',
            'Hobi' => 'Membaca, Fangirl, Coding',
            'Cita-cita' => 'Web Developer',
            'Keahlian' => 'HTML',
            'Pengalaman Organisasi' => 'Pramuka',
    
        ];
    
        }

        
private function getLink()
{
    return [
        'Blog' => '<a href="/blog">Blog</a>',
        'Skill' => '<a href="/skill">Skill</a>',
        'Message' => '<a href="/message">Message</a>',
    ];
}
}
