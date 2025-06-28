<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Mahasiswa</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ url('/mahasiswa') }}" method="POST">
        @csrf

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required><br><br>

        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" id="nim" value="{{ old('nim') }}" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}"><br><br>

        <label for="no_hp">No HP:</label><br>
        <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ url('/mahasiswa') }}">Lihat Data Mahasiswa</a>
</body>
</html>
