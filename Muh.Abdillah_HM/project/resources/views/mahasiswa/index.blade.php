<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    
    <a href="{{ url('/mahasiswa/create') }}"><button>Tambah Mahasiswa</button></a>
    <a href="{{ route('mahasiswa.trash') }}"><button>Trash Bin</button></a>

    <table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px;">
        <tr bgcolor="lightblue">
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr bgcolor="lightcyan">
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>
                <a href="/mahasiswa/{{ $m->id }}/edit">Edit</a>
                <form action="/mahasiswa/{{ $m->id }}" method="POST" onsubmit="return confirm('Pindahkan ke trash bin?')" style="display:inline;">
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