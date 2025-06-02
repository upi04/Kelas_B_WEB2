<?php

namespace App\Http\Controllers;

class SkillController extends Controller
{
    public function biodata()
    {
        $data = [
            'skill' => '-',
        ];

        $judul = 'Skill';
        return view('biodatadiri.biodata', compact('data', 'judul'));
    }
}
