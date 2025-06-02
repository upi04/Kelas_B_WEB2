<!DOCTYPE html>
<html>
<head>
    <title>{{ $judul ?? 'Biodata' }}</title>
</head>
<body>
    <h2>{{ $judul ?? 'Biodata Lengkap' }}</h2>

    <table border="1" cellpadding="8">  
        @foreach ($data as $label => $value)
            <tr>
                <td><strong>{{ ucwords(str_replace('_', ' ', $label)) }}</strong></td>
                <td>{!! $value !!}</td>
            </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ url('/biodatadiri/home') }}">← Kembali ke Halaman Utama</a>
</body>
</html>
