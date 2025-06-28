<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <a href="{{ url('/laporan4/students') }}">Lihat Data Mahasiswa</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Deskripsi</th>
                <th>Genre</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->published_year }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

