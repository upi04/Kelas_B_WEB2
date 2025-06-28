<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9; /* hijau muda */
            padding: 30px;
        }
        h1 {
            color: #c2185b; /* pink tua */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th {
            background-color: #fce4ec; /* pink muda */
            color: #4e342e;
            padding: 10px;
        }
        td {
            padding: 8px;
            text-align: center;
        }
        .success {
            color: green;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($mahasiswas as $mhs)
                <tr>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                        <a href="{{ route('mahasiswa.destroy', $mhs->id) }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
