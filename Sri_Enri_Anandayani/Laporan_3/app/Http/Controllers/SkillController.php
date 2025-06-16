<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    private $skills = [
        1 => ['name' => 'Laravel', 'level' => 'Lanjutan'],
        2 => ['name' => 'PHP', 'level' => 'Menengah'],
        3 => ['name' => 'JavaScript', 'level' => 'Dasar'],
    ];

    public function index()
    {
        return view('dashboard', ['skills' => $this->skills]);
    }

    public function show($id)
    {
        if (!isset($this->skills[$id])) {
            abort(404);
        }

        return view('skill.show', ['skill' => $this->skills[$id]]);
    }
}
