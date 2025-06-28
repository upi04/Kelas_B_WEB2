<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa & Profil</h1>

    <form action="{{ url('/mahasiswa/'.$mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat" value="{{ $mahasiswa->profile->alamat ?? '' }}"><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp" value="{{ $mahasiswa->profile->no_hp ?? '' }}"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
