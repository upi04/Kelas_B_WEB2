<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h2>Daftar Buku</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher Year</th>
                <th>Description</th>
                <th>Genre</th>
                <th>Stock</th>
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
                <td><b>{{ $book->stock }}</b></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
