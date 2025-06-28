<!DOCTYPE html>
<html>
<head>
    <title>Trash Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa Terhapus</h1>
    <a href="{{ url('/mahasiswa') }}">← Kembali ke Daftar Mahasiswa</a><br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>
                <a href="{{ route('mahasiswa.restore', $m->id) }}">Restore</a> |
                <form action="{{ route('mahasiswa.forceDelete', $m->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin hapus permanen?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus Permanen</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
