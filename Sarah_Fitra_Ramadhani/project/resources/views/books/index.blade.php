<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #eef2f7;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2d3436;
            margin-bottom: 30px;
        }

        .table-container {
            max-width: 1100px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1000px;
        }

        thead {
            background: linear-gradient(to right,rgb(78, 82, 85),rgb(74, 78, 81));
            color: white;
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
        }

        th {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tbody tr {
            border-bottom: 1px solid #e0e0e0;
            transition: background-color 0.2s ease-in-out;
        }

        tbody tr:hover {
            background-color: #f1f6fb;
        }

        td {
            font-size: 14px;
            color: #2c3e50;
        }

        @media (max-width: 768px) {
            .table-container {
                overflow-x: auto;
            }

            table {
                min-width: 800px;
            }

            body {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <h1>Daftar Buku</h1>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Deskripsi</th>
                    <th>Genre</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
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
    </div>

</body>
</html>
