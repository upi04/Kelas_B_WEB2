<h2>Edit Data Mahasiswa</h2>
<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br>
    
    <label>NIM:</label>
    <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br>

    <label>Jurusan:</label>
    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br>

    <button type="submit">Simpan Perubahan</button>
</form>
