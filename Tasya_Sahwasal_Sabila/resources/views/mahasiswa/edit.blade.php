<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe4f0; /* pink muda */
            padding: 30px;
        }
        h1 {
            color: #2e8b57; /* hijau */
        }
        form {
            background-color: #f0fff0; /* hijau muda */
            padding: 20px;
            border-radius: 10px;
            width: 350px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            background-color: #2e8b57;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .delete-button {
            background-color: #ff4d4d;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <h1>Edit Data Mahasiswa & Profil</h1>

    <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>

        <label>NIM:</label>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required>

        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{ $mahasiswa->profile->alamat ?? '' }}" required>

        <label>No HP:</label>
        <input type="text" name="no_hp" value="{{ $mahasiswa->profile->no_hp ?? '' }}" required>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <form method="POST" action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-button">Hapus Permanen</button>
    </form>

</body>
</html>
