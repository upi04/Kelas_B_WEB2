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
            "tempat" => "Lahir dirumah pada hari selasa",
            "cita_cita" => "Menjadi Diri Sendiri",
        ];

        return view('about', compact('items'));
    }

    public function contact(){
        return view('contact');
    }

    public function project(){
        return view('project');
    }
    public function skill(){
        return view('skill'); 
    }

}
