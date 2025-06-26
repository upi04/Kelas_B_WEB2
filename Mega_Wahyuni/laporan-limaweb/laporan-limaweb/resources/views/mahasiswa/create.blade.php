<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa Baru</h1>

    {{-- Tampilkan Error Validasi --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Tambah Mahasiswa --}}
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" value="{{ old('nim') }}"><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="{{ old('jurusan') }}"><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}">Kembali</a>
    </form>
</body>
</html>


 Perbedaan Method GET dan POST di Laravel
---------------------------------------------------------

 GET => digunakan untuk mengambil/meminta data dari server.
       Tidak membawa data dari user di body request.
       Contoh: menampilkan halaman form, daftar data.

 POST => digunakan untuk mengirim data dari client ke server.
         Digunakan untuk menyimpan data ke database.
         Contoh: menyimpan form pendaftaran.

Contoh GET:
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);

Contoh POST:
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

