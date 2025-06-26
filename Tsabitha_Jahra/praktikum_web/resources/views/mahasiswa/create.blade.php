<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="text-center mb-4">
                    <h2 class="h3">Tambah Mahasiswa Baru</h2>
                    <p class="text-muted">Silakan isi form di bawah ini.</p>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger border-start border-4 border-danger">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="/mahasiswa" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label fw-semibold">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim') }}" required>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <a href="/mahasiswa" class="btn btn-light border">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>