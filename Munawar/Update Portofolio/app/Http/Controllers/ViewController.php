<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        $items = [
            "nama" => 'Munawar',
            "nim" => "60200123067",
            "kelas" => "B",
            "hobi" => "Tiduran",
            "tempat" => "Lahir dirumah tanggal 20 pada hari selasa",
            "cita_cita" => "Menjadi Diri Sendiri",
            "alamat" => "Rumah",
            "email" => "munawarwawan08@gmail.com",
            "telepon" => "085242783644",
            "pendidikan" => "SMK",
            "keahlian" => "tidur",
            "pengalaman" => "PMI",
        ];

        return view('about', compact('items'));
    }

    public function contact(){
        return view('contact');
    }

    public function project(){
        return view('project');
    }

    public function produk(){
        $items = [ "kopi", "teh", "jus", "susu"];

        return view('produk', compact('items'));
        
    }


    public function message() {
        return view('message');
    }

    public function blog(){
        return view('blog');
    }

    public function skill(){
        return view('skill');
    }

}
