<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Mahasiswa</h1>
    <form action="{{ url('/mahasiswa') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama">
    <input type="text" name="nim" placeholder="NIM">
    <input type="text" name="jurusan" placeholder="Jurusan">
    <input type="text" name="alamat" placeholder="Alamat">
    <input type="text" name="no_hp" placeholder="No HP">
    <button type="submit">Simpan</button>
</form>

</body>
</html>