<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Selamat Datang di Website Laravel Saya</h1>
    <p>Silakan pilih dari controller berikut:</p>

    <ol>
        <li><a href="{{ route('biodata.home') }}">HomeController</a></li>
        <li><a href="{{ route('biodata.blog') }}">BlogController</a></li>
        <li><a href="{{ route('biodata.skill') }}">SkillController</a></li>
        <li><a href="{{ route('biodata.message') }}">MessageController</a></li>
    </ol>
</body>
</html>
