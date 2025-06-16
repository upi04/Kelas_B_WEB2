@extends('layout')

@section('content')
    <h1>Tambah Buku</h1>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Judul"><br>
        <input type="text" name="author" placeholder="Penulis"><br>
        <input type="number" name="published_year" placeholder="Tahun Terbit"><br>
        <textarea name="description" placeholder="Deskripsi"></textarea><br>
        <input type="text" name="genre" placeholder="Genre"><br>
        <input type="number" name="stock" placeholder="Stok"><br>
        <button type="submit">Simpan</button>
    </form>
@endsection
