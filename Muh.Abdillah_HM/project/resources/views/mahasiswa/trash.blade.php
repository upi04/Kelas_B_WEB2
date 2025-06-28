<!DOCTYPE html>
<html>
<head>
    <title>Trash Bin Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa (Trash Bin)</h1>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ url('/mahasiswa') }}">Kembali ke Daftar Mahasiswa</a>

    <table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px;">
        <thead>
            <tr bgcolor="lightcoral">
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Dihapus Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $m)
            <tr bgcolor="lightyellow">
                <td>{{ $m->nama }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->jurusan }}</td>
                <td>{{ $m->deleted_at }}</td>
                <td>
                    <form action="{{ route('mahasiswa.restore', $m->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit">Restore</button>
                    </form>
                    <form action="{{ route('mahasiswa.forceDelete', $m->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin hapus permanen?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus Permanen</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" align="center">Tidak ada data di dalam trash bin.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>