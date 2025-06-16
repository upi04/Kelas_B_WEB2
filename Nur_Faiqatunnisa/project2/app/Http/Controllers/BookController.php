<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create() {
    return view('books.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'published_year' => 'required|integer',
            'description' => 'required|string',
            'genre' => 'required|string',
            'stock' => 'required|integer'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Data buku berhasil ditambahkan.');
    }

}
