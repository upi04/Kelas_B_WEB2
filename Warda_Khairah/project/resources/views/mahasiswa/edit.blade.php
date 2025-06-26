<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="{{ url('/mahasiswa/' . $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}">
    <input type="text" name="nim" value="{{ $mahasiswa->nim }}">
    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}">
    <input type="text" name="alamat" value="{{ $mahasiswa->profile->alamat ?? '' }}">
    <input type="text" name="no_hp" value="{{ $mahasiswa->profile->no_hp ?? '' }}">

    <button type="submit">Update</button>
</form>
</body>
</html>