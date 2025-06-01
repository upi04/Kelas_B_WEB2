<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $messages = [
        1 => ['sender' => 'ica', 'content' => 'Halo, bagaimana kabarmu?'],
        2 => ['sender' => 'ica', 'content' => 'Jangan lupa meeting jam 3 sore.'],
    ];

    public function index()
    {
        return view('dashboard', ['messages' => $this->messages]);
    }

    public function show($id)
    {
        if (!isset($this->messages[$id])) {
            abort(404);
        }

        return view('message.show', ['message' => $this->messages[$id]]);
    }
}