<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $posts = [
        1 => ['title' => 'Apa itu Laravel?', 'content' => 'Laravel adalah framework PHP.'],
        2 => ['title' => 'Mengenal MVC', 'content' => 'MVC adalah arsitektur Model-View-Controller.'],
    ];

    public function index()
    {
        return view('dashboard', ['posts' => $this->posts]);
    }

    public function show($id)
    {
        if (!isset($this->posts[$id])) {
            abort(404);
        }

        return view('blog.show', ['post' => $this->posts[$id]]);
    }
}