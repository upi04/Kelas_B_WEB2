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
        
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $mahasiswa->nama }}" placeholder="Nama"><br><br>
        
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="{{ $mahasiswa->nim }}" placeholder="NIM"><br><br>
        
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan" value="{{ $mahasiswa->jurusan }}" placeholder="Jurusan"><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" placeholder="Alamat">{{ $mahasiswa->profile->alamat ?? '' }}</textarea><br><br>

        <label for="no_hp">Nomor HP:</label><br>
        <input type="text" id="no_hp" name="no_hp" value="{{ $mahasiswa->profile->no_hp ?? '' }}" placeholder="Nomor HP"><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>