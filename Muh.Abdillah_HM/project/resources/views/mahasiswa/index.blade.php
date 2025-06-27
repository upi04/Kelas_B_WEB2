<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            align-content: middle;
        }
    </style>
</head>
<body>  
    <h1>Data Mahasiswa</h1>
    <table border="1" cellpadding="10" bordercolor="gray" cellspacing="0" >
        <tr bgcolor="lightblue">
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr bgcolor="lightcyan">
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->jurusan }}</td>
        </tr>
        @endforeach
    </table>

    <button><a href="{{ url('/mahasiswa/create') }}">Tambah</a></button>

    <!-- <img src="/resources/views/mahasiswa/image.png" width="10px"> -->
</body>
</html>