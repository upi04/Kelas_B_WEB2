<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
</head>
<body>
    <h1>Bahasa Pemrograman</h1>
    <ul>
    @foreach($bahasa as $item)
        <li>{{ $item }}</li>
    @endforeach
    </ul>

    <h1>PHP</h1>
    <p>PHP adalah bahasa pemrograman yang digunakan untuk membuat aplikasi web dinamis.</p>
    <br>
    <h1>Java</h1>
    <p>Java adalah bahasa pemrograman yang digunakan untuk membuat aplikasi desktop.</p>

</body>
</html>