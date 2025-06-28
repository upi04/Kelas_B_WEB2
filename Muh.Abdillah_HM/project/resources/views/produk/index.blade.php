<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/projects') }}">Projects</a> |
        <a href="{{ url('/skills') }}">Skills</a> |
        <a href="{{ url('/contact') }}">Contact</a> |
    </nav>
    <ul>
        @foreach ($produk as $item)
        <li>
            {{$item}}
        </li>
        @endforeach
    </ul>
</body>
</html>