<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>

    <form method="POST" action="{{ route('students.store') }}">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="name" required><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="birthdate" required><br>

        <label>Jurusan:</label><br>
        <input type="text" name="Jurusan" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
