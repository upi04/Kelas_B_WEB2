<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <!-- Form tambah buku -->
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="title"><br>

        <label>Penulis:</label><br>
        <input type="text" name="author"><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="published_year"><br>

        <label>Deskripsi:</label><br>
        <textarea name="description"></textarea><br>

        <label>Genre:</label><br>
        <input type="text" name="genre"><br>

        <label>Stok:</label><br>
        <input type="number" name="stock"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <hr>

    <!-- Daftar buku -->
    <h2>Data Buku</h2>
    <ul>
        @foreach ($books as $book)
            <li>
                <strong>{{ $book->title }}</strong> oleh {{ $book->author }}
                ({{ $book->published_year }}) - Genre: {{ $book->genre ?? 'Tidak Ada' }},
                Stok: {{ $book->stock }}
            </li>
        @endforeach
    </ul>
</body>
</html>
