<!DOCTYPE html>
<html>
<head>
    <title>{{ $judul ?? 'Biodata' }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }

        h2 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        th, td {
            text-align: left;
            padding: 12px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9f5ff;
        }

        td strong {
            color: #2c3e50;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>{{ $judul ?? 'Biodata Lengkap' }}</h2>

    <table border="1">
        @foreach ($data as $label => $value)
            <tr>
                <td><strong>{{ ucwords(str_replace('_', ' ', $label)) }}</strong></td>
                <td>{!! $value !!}</td>
            </tr>
        @endforeach
    </table>

    <a href="{{ url('/biodatadiri/home') }}">← Kembali ke Halaman Utama</a>
</body>
</html>