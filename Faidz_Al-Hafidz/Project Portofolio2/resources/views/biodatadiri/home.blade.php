<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Welcome to My Website Laravel </h1>
    <p>Silakan pilih dari pilihan berikut</p>

    <ol>
        <li><a href="{{ route('biodata.home') }}">HomeController</a></li>
        <li><a href="{{ route('biodata.blog') }}">BlogController</a></li>
        <li><a href="{{ route('biodata.skill') }}">SkillController</a></li>
        <li><a href="{{ route('biodata.message') }}">MessageController</a></li>
    </ol>
</body>
</html>