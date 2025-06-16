<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    @vite('resources/css/human.css')

</head>
<body>
    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Lahir</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($humans as $human)
                    <tr>
                        <td>{{ $human->id }}</td>
                        <td>{{ $human->name }}</td>
                        <td>{{ $human->email }}</td>
                        <td>{{ $human->birthdate }}</td>
                        <td>{{ $human->major }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
