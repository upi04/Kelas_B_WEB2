<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
</head>
<body>
@section('header-image')
        <img src="{{ asset('header_foto.png') }}" alt="Project Logo" style="height: 60px;">
    @endsection

    @include('header')

</body>
</html>
