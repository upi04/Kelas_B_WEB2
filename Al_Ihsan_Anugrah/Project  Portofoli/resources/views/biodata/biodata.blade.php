<!DOCTYPE html>
<html>
<head>
    <title>Biodata Lengkap</title>
</head>
<body>

    <h2>Biodata Lengkap</h2>

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
