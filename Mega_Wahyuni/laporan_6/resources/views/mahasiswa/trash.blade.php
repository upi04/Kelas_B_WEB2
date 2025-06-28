<!DOCTYPE html>
<html>
<head>
    <title>Data Terhapus</title>
</head>
<body>
    <h2>Data Mahasiswa Terhapus</h2>
    <a href="{{ url('/mahasiswa/') }}">Lihat Data Mahasiswa</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>

        @foreach($data as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->profile->alamat ?? '-' }}</td>
            <td>{{ $mhs->profile->no_hp ?? '-' }}</td>
            <td>
                <form action="{{ url('/mahasiswa/' . $mhs->id . '/restore') }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit">Pulihkan</button>
                </form>

                <form action="{{ url('/mahasiswa/' . $mhs->id . '/force') }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus permanen?')">Hapus Permanen</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
