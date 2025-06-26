<!DOCTYPE html>
<html>
<head>
    <title>Biodata Lengkap</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 60%; border-collapse: collapse; margin: 40px auto; }
        th, td { padding: 12px; border: 1px solid #444; }
        th { background-color: #f4f4f4; width: 30%; }
        h2 { text-align: center; margin-top: 30px; }
    </style>
</head>
<body>
    <h2>Biodata Lengkap</h2>
    <table>
        <tr><th>Nama</th><td>{{ $biodata['nama'] }}</td></tr>
        <tr><th>Tempat, Tanggal Lahir</th><td>{{ $biodata['ttl'] }}</td></tr>
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
