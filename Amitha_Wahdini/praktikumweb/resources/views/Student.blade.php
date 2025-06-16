<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <!-- Form tambah mahasiswa -->
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name"><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="birthdate"><br>

        <label>Jurusan:</label><br>
        <input type="text" name="major"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <hr>

    <!-- Daftar mahasiswa -->
    <h2>List Mahasiswa</h2>
    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student->name }} ({{ $student->email }}) - {{ $student->major }}, lahir {{ $student->birthdate }}
            </li>
        @endforeach
    </ul>
</body>
</html>
