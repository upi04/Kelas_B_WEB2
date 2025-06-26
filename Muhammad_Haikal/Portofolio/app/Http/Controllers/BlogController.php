<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function biodata()
    {
        $biodata = [
            'Nama' => 'Muhammad Haikal',
            'Email' => 'Haikal@gmail.com',
        ];

        return view('biodata', ['biodata' => $biodata, 'judul' => 'Blog']);
    }
}

