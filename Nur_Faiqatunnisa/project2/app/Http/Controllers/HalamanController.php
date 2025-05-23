<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        $biodata = [
            'nama' => 'Nur Faiqatunnisa',
            'ttl' => 'Makassar, 15 Januari 2004',
            'hobi' => 'Membaca dan Menulis',
            'citacita' => 'Menjadi Dosen dan Peneliti',
        ];
        return view('about', compact('biodata'));
    }

    public function projects() {
        return view('projects');
    }

    public function skills() {
        return view('skills');
    }

    public function contact() {
        return view('contact');
    }
}
