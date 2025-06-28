
<!DOCTYPE html>
<html>
<head>
    <title>{{ $judul }} - Biodata</title>
    <style>
        table {
            width: 60%;
            margin: 30px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
        nav {
            text-align: center;
            margin: 24px 0;
        }
        nav a {
            color: #2d6cdf;
            text-decoration: none;
            margin: 0 12px;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 6px;
            transition: background 0.2s, color 0.2s;
        }
        nav a:hover {
            background: #2d6cdf;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/home/biodata">Home</a>
        <a href="/blog/biodata">Blog</a>
        <a href="/skill/biodata">Skill</a>
        <a href="/message/biodata">Message</a>
    </nav>
    <h2 style="text-align: center;">Biodata - {{ $judul }}</h2>
    <table>
        <tbody>
            @foreach($biodata as $key => $value)
                <tr>
                    <th>{{ $key }}</th>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>