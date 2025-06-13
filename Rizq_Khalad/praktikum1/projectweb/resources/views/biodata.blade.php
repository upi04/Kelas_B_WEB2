<!DOCTYPE html>
<html>
<head>
    <title>Biodata Lengkap</title>
    <style>
        table { width: 60%; border-collapse: collapse; margin: 20px auto; }
        td, th { padding: 8px; border: 1px solid #ccc; }
        th { background-color: #f2f2f2; text-align: left; }
    </style>
</head>
<body>

<h2 style="text-align: center;">Biodata Lengkap</h2>

<table>
    <tr><th>Nama</th><td>{{ $data['nama'] }}</td></tr>
    <tr><th>Tempat, Tanggal Lahir</th><td>{{ $data['ttl'] }}</td></tr>
    <tr><th>Jenis Kelamin</th><td>{{ $data['jenis_kelamin'] }}</td></tr>
    <tr><th>Alamat</th><td>{{ $data['alamat'] }}</td></tr>
    <tr><th>Email</th><td>{{ $data['email'] }}</td></tr>
    <tr><th>Telepon</th><td>{{ $data['telepon'] }}</td></tr>
    <tr><th>Pendidikan</th><td>{{ $data['pendidikan'] }}</td></tr>
    <tr><th>Hobi</th><td>{{ $data['hobi'] }}</td></tr>
    <tr><th>Cita-cita</th><td>{{ $data['cita_cita'] }}</td></tr>
    <tr><th>Keahlian</th><td>{{ $data['keahlian'] }}</td></tr>
    <tr><th>Pengalaman Organisasi</th><td>{{ $data['pengalaman_organisasi'] }}</td></tr>
</table>

</body>
</html>