<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table>
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Publisher Year</th>
        <th>Description</th>
        <th>Genre</th>
        <th>Stock</th>
      </tr>
      @foreach($books as $book)
      <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->published_year }}</td>
        <td>{{ $book->description }}</td>
        <td>{{ $book->genre }}</td>
        <td>{{ $book->stock }}</td>
      </tr>
      @endforeach
    </table>
</body>
</html>
