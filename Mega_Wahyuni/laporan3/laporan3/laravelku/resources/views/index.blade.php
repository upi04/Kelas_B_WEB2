<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center;">Biodata Diri</h2>

    <table>
        @foreach ($biodata as $key => $value)
            <tr>
                <th>{{ $key }}</th>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>
