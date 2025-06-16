<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <a href="{{ route('students.create') }}">
    <button>+ Tambah Mahasiswa</button>
    </a>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->birthdate }}</td>
                <td>{{ $student->Jurusan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
