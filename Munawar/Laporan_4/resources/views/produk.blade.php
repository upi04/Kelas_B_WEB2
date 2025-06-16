<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produk</h1>
    <tr>
        <td>
            @foreach($items as $item)
                <li>{{ $item }}</li>
            @endforeach
    </tr>
    
</body>
</html>