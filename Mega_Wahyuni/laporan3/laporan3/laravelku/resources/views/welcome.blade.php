<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan 3</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Biodata</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Pendidikan</th>
            <th>Hobi</th>
            <th>Cita-cita</th>
            <th>Keahlian</th>
            <th>Pengalaman Organisasi</th>
        </tr>

        @foreach ($biodata as $bio):
        <tr>
            <td>{{ $bio['nama'] }}</td>
            <td>{{ $bio['tempat_lahir'] }}, {{ $bio['tanggal_lahir'] }}</td>
            <td>{{ $bio['jenis_kelamin'] }}</td>
            <td>{{ $bio['alamat'] }}</td>
            <td>{{ $bio['email'] }}</td>
            <td>{{ $bio['telepon'] }}</td>
            <td>{{ $bio['pendidikan'] }}</td>
            <td>{{ $bio['hobi'] }}</td>
            <td>{{ $bio['cita_cita'] }}</td>
            <td>{{ $bio['keahlian'] }}</td>
            <td>{{ $bio['pengalaman_organisasi'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
