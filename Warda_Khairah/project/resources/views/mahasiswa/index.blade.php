<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <a href="{{ url('/mahasiswa/create') }}">Tambah Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>

        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>{{ $m->profile->alamat }}</td>
            <td>{{ $m->profile->no_hp }}</td>
            <td>
                <a href="{{ url('/mahasiswa/' . $m->id . '/edit') }}">Edit</a> |
                <form action="{{ url('/mahasiswa/' . $m->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ url('/mahasiswa/trash') }}">Lihat Data Terhapus</a>
    

</body>
</html>
