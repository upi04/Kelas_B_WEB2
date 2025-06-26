<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>yamaha type</h1>
    <ul>
        @foreach ($yamaha as $item)
            <li>
                <h3>
                    {{$item}}
                </h3>
                
        @endforeach
            </li>
    </ul>
    
</body>
</html>