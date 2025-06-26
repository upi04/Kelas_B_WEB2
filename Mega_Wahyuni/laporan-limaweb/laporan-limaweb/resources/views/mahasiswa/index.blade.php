<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    {{-- TOMBOL TAMBAH DATA --}}
    <a href="{{ route('mahasiswa.create') }}" style="display:inline-block; margin-bottom:10px; padding:5px 10px; background-color:blue; color:white; text-decoration:none;">
        + Tambah Data
    </a>

    {{-- NOTIFIKASI SUKSES --}}
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->jurusan }}</td>
                    <td>
                        {{-- Tombol Edit --}}
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" style="padding:3px 8px; background-color:green; color:white; text-decoration:none;">Edit</a>

                        {{-- Tombol Delete --}}
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding:3px 8px; background-color:red; color:white; border:none; cursor:pointer;" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>