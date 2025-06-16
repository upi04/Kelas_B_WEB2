<!DOCTYPE html>
<html>
<head>
    <title>Biodata Lengkap</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Biodata Lengkap</h2>
    <table>
        <tr><th>Nama</th><td>{{ $biodata['Amitha Wahdini'] }}</td></tr>
        <tr><th>Tempat, Tanggal Lahir</th><td>{{ $biodata['Toraja,22 Oktober 2004'] }}</td></tr>
        <tr><th>Jenis Kelamin</th><td>{{ $biodata['Perempuan'] }}</td></tr>
        <tr><th>Alamat</th><td>{{ $biodata['Tana Toraja'] }}</td></tr>
        <tr><th>Email</th><td>{{ $biodata['amithamangenda@gmail.com'] }}</td></tr>
        <tr><th>Telepon</th><td>{{ $biodata['082193886936'] }}</td></tr>
        <tr><th>Pendidikan</th><td>{{ $biodata['Mahasiswa,UINAM'] }}</td></tr>
        <tr><th>Hobi</th><td>{{ $biodata['Menyanyi,Bermain Bulutangkis'] }}</td></tr>
        <tr><th>Cita-cita</th><td>{{ $biodata['Designer'] }}</td></tr>
        <tr><th>Pengalaman Organisasi</th><td>{{ $biodata['organisasi'] }}</td></tr>
    </table>
</body>
</html>
