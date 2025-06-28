<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="{{ url('/mahasiswa/create') }}">Tambah Mahasiswa</a> 
    <a href="{{ url('/mahasiswa/trash') }}">Lihat Trash</a>

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
                <a href="{{ url('/mahasiswa/'.$m->id.'/edit') }}">Edit</a> 
                <form action="{{ url('/mahasiswa/'.$m->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
