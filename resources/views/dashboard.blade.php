<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        nav {
            background: #333;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="#">Home</a>
            <a href="#">Blog</a>
            <a href="#">Skills</a>
            <a href="#">Messages</a>
            <a href="#">Biodata</a>
        </nav>

        <h1>Dashboard</h1>
        <h2>{{ $title }}</h2>
        <p>{{ $deskripsi }}</p>

        <table>
            <tbody>
                @foreach($biodata as $label => $isi)
                <tr>
                    <th>{{ $label }}</th>
                    <td>{{ $isi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>