<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa Terhapus</title>
</head>
<body>
    <h1>Data Mahasiswa di Trash</h1>

    <a href="{{ url('/mahasiswa') }}">Kembali ke Daftar</a>

    <table border="1">
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
                <a href="{{ url('/mahasiswa/restore/'.$m->id) }}">Restore</a>
                <form action="{{ url('/mahasiswa/forceDelete/'.$m->id) }}" method="POST" style="display:inline;">
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
//