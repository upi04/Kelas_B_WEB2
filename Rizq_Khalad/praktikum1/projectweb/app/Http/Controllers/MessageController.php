<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function profile()
    {
        $data = ['rizqkhalad'];
        return view('biodata', compact('data'));
    }
}