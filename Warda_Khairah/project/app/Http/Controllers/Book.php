<?php

namespace App\Http\Controllers;

use App\Models\c;
use Illuminate\Http\Request;

class Book extends Controller{
    public function index(){
        $books = \App\Models\Book::all();
        return view("books.index",compact("books"));
    }
    
}
