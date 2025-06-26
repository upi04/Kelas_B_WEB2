<?php

namespace App\Http\Controllers;

class MessageController extends Controller
{
    public function biodata()
    {
        $data = [
            'LAB' => 'Pemrograman WEB2 - L405 - 12:40',
        ];

        $judul = 'Pesan';
        return view('biodatadiri.biodata', compact('data', 'judul'));
    }
}

