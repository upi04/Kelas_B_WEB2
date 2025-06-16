<!DOCTYPE html>
<html>
<head>
    <title>Biodata Lengkap Tisaaa</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #ffeef8;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 5px;
            color: #d63384;
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 30px auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            padding: 30px;
        }
        .foto {
            display: block;
            margin: 0 auto 20px auto;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #b2f2bb;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            text-align: left;
            padding: 10px;
            background-color: #d0f0c0;
            width: 35%;
        }
        td {
            padding: 10px;
            background-color: #fdf0f7;
        }
        tr:nth-child(even) td {
            background-color: #ffe4f0;
        }
        a {
            color: #d63384;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Biodata Lengkap Tisaaa</h2>
        <img src="{{ asset($foto) }}" alt="Foto Profil" class="foto">
        <table>
            @foreach($biodata as $label => $value)
                <tr>
                    <th>{{ $label }}</th>
                    <td>
                        @if (filter_var($value, FILTER_VALIDATE_URL))
                            <a href="{{ $value }}" target="_blank">{{ $value }}</a>
                        @else
                            {{ $value }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
