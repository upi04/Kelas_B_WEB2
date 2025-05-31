<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $messages = [
        1 => ['sender' => 'Sarah', 'content' => 'Heii, kamu apa kabar?'],
        2 => ['sender' => 'Serco', 'content' => 'jalan-jalan yuk!.'],
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