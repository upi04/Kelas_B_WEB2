<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Biodata</title>
</head>
<body>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr><th>Nama</th><td>{{ $biodata['nama'] }}</td></tr>
        <tr><th>Tempat, Tanggal Lahir</th><td>{{ $biodata['tempat_tanggal_lahir'] }}</td></tr>
        <tr><th>Jenis Kelamin</th><td>{{ $biodata['jenis_kelamin'] }}</td></tr>
        <tr><th>Alamat</th><td>{{ $biodata['alamat'] }}</td></tr>
        <tr><th>Email</th><td>{{ $biodata['email'] }}</td></tr>
        <tr><th>Telepon</th><td>{{ $biodata['telepon'] }}</td></tr>
        <tr><th>Pendidikan</th><td>{{ $biodata['pendidikan'] }}</td></tr>
        <tr><th>Hobi</th><td>{{ $biodata['hobi'] }}</td></tr>
        <tr><th>Cita-cita</th><td>{{ $biodata['cita_cita'] }}</td></tr>
        <tr><th>Keahlian</th><td>{{ $biodata['keahlian'] }}</td></tr>
        <tr><th>Pengalaman Organisasi</th><td>{{ $biodata['pengalaman_organisasi'] }}</td></tr>
    </table>
</body>
</html>
