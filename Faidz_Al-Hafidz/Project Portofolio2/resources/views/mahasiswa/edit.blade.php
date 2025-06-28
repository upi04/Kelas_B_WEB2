<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    @if($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ url('/mahasiswa/' . $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ old('nama', $data->nama) }}"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" value="{{ old('nim', $data->nim) }}"><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat" value="{{ old('alamat', $data->profile->alamat) }}"><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp" value="{{ old('no_hp', $data->profile->no_hp) }}"><br><br>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ url('/mahasiswa') }}">Batal</a>
    </form>
</body>
</html>
