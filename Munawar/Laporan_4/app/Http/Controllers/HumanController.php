<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;

class HumanController extends Controller
{
    public function index()
    {
        $humans = Human::all();
        return view('students.human', compact('humans'));
    }
}
