<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" placeholder="Nama"><br>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" placeholder="NIM"><br>
        <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" placeholder="Jurusan"><br>
        <button type="submit">Update</button>
    </form>

    <br>

    <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
</body>
</html>