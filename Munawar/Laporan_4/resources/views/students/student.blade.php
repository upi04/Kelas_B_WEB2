<!DOCTYPE html>
<html>
<head>
    <title>Daftar Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Student dari Database</h2>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
