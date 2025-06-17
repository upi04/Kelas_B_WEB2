<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
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
<h2>Daftar Mahasiswa</h2>
<table border="1">
<tr>
  <th>Nama</th>
  <th>Email</th>
  <th>Tanggal Lahir</th>
  <th>Jurusan</th>
</tr>
@foreach($students as $s)
<tr>
  <td>{{ $s->name }}</td>
  <td>{{ $s->email }}</td>
  <td>{{ $s->birthdate }}</td>
  <td>{{ $s->major }}</td>
</tr>
@endforeach
</table>

</body>
</html>