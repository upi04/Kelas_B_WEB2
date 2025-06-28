<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Opsional: Sedikit kustomisasi untuk header tabel yang lebih minimalis */
        .table>thead {
            border-color: #dee2e6;
            /* Menyamakan warna border dengan border tabel bawaan */
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h3 mb-0">Data Mahasiswa</h2>
                    <a href="/mahasiswa/create" class="btn btn-outline-secondary">Tambah Mahasiswa</a>
                </div>

                @if (session('success'))
                <div class="alert alert-success border-start border-4 border-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="fw-semibold">#</th>
                                <th scope="col" class="fw-semibold">Nama Mahasiswa</th>
                                <th scope="col" class="fw-semibold">NIM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nim }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <p class="mb-0 text-muted">Data belum tersedia.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

</html>