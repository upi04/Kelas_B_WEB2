<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BiodataController extends Controller
{
    public function biodata()
    {
        $data = [
            'nama' => 'Munawar',
            'umur' => 21,
            'alamat' => 'baabafgaf',
        ];

        return view('.biodata', compact('data'));
    }

    public function bahasa_program()
    {
        $bahasa = [
            'PHP',
            'JavaScript',
            'Python',
            'Java',
            'C++',
        ];

        return view('bahasa_program', compact('bahasa'));
    }
    
}

