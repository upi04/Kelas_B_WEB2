<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th{
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Biodata</h2>

    <a href="/biodata/home">Home</a>
    <a href="/biodata/blog">Blog</a>
    <a href="/biodata/skill">Skill</a>
    <a href="/biodata/message">Message</a>
    <table>
        @foreach($biodata as $key => $value)
            <tr>
                <th>{{ $key }}</th>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
