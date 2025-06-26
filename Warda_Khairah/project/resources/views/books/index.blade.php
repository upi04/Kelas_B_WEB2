<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">📚 Daftar Buku</h1>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>{{ $book->description }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>