<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function biodata()
    {
        $biodata = [
            'Nama' => 'Muhammad Haikal',
            'Bahasa Pemrograman' => 'PHP, JavaScript, hrml, CSS',
            'Framework' => 'Laravel,',
            'Database' => 'MySQL, PostgreSQL',
            'Tools' => ' VSCode',
            'Email' => 'Haikal@gmail.com',
        ];

        return view('biodata', ['biodata' => $biodata, 'judul' => 'Skill']);
    }
}

