<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Biodata</title>
    <link rel="stylesheet" href="{{ asset('css/style_biodata.css') }}">
</head>
<body>
    @section('header-image')
        <img src="{{ asset('image/biodata_foto.png') }}" alt="Project Logo" style="height: 60px;">
    @endsection

    @include('header')

    <table class="biodata-table">
        <tbody>
            @foreach ($biodata as $key => $value)
            <tr>
                <th>{{ $key }}</th>
                <td>{{ $value }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
