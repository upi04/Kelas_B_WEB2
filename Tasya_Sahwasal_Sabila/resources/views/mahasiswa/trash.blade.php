<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Terhapus</title>
</head>
<body>
    <h1>Data Mahasiswa yang Dihapus (Trash)</h1>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $m)
            <tr>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->nim }}</td>
                <td>
                    <a href="/mahasiswa/{{ $m->id }}/restore">🔄 Restore</a>
                    <form action="/mahasiswa/{{ $m->id }}/forceDelete" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus permanen?')">❌ Hapus Permanen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="/mahasiswa">⬅️ Kembali ke Data Mahasiswa</a>

</body>
</html>