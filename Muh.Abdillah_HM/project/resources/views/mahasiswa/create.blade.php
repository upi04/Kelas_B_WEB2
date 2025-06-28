<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Mahasiswa</h1>
    <form action="/mahasiswa" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>