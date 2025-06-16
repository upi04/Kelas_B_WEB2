<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        nav {
            background: #333;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="#">Home</a>
            <a href="#">Blog</a>
            <a href="#">Skills</a>
            <a href="#">Messages</a>
            <a href="#">Biodata</a>
        </nav>

        <h1>Dashboard</h1>
        <h2>{{ $title }}</h2>
        <p>{{ $deskripsi }}</p>

        <table>
            <tbody>
                @foreach($biodata as $label => $isi)
                <tr>
                    <th>{{ $label }}</th>
                    <td>{{ $isi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
=======
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 80%; margin-bottom: 30px; }
        th, td { border: 1px solid #000; padding: 8px 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        nav a { margin-right: 10px; }
        h2 { margin-top: 30px; }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <nav>
        <a href="/">Home</a> |
        <a href="/blog">Blog</a> |
        <a href="/skills">Skills</a> |
        <a href="/messages">Messages</a> |
        <a href="/biodata/pribadi">Biodata</a>
    </nav>
    <hr>

    {{-- Home --}}
@if(isset($title) && isset($deskripsi))
    <h2>{{ $title }}</h2>
    <p>{{ $deskripsi }}</p>
    @if(!empty($fitur))
        <table>
            <tr>
                <th>Label</th>
                <th>Isi</th>
            </tr>
            @foreach($fitur as $label => $isi)
                <tr>
                    <td>{{ $label }}</td>
                    <td>{{ $isi }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endif

    {{-- Blog --}}
    @if(isset($posts))
        <h2>Daftar Artikel</h2>
        <table>
            <tr><th>Judul</th></tr>
            @foreach ($posts as $id => $post)
                <tr>
                    <td><a href="/blog/{{ $id }}">{{ $post['title'] }}</a></td>
                </tr>
            @endforeach
        </table>
    @elseif(isset($post))
        <h2>{{ $post['title'] }}</h2>
        <p>{{ $post['content'] }}</p>
        <a href="/blog">← Kembali ke Blog</a>
    @endif

    {{-- Skill --}}
    @if(isset($skills))
        <h2>Daftar Skill</h2>
        <table>
            <tr><th>Nama</th><th>Level</th></tr>
            @foreach ($skills as $id => $skill)
                <tr>
                    <td><a href="/skills/{{ $id }}">{{ $skill['name'] }}</a></td>
                    <td>{{ $skill['level'] }}</td>
                </tr>
            @endforeach
        </table>
    @elseif(isset($skill))
        <h2>{{ $skill['name'] }}</h2>
        <p>Tingkat: {{ $skill['level'] }}</p>
        <a href="/skills">← Kembali ke Skill</a>
    @endif

    {{-- Message --}}
    @if(isset($messages))
        <h2>Daftar Pesan</h2>
        <table>
            <tr><th>Pengirim</th><th>Isi (ringkas)</th></tr>
            @foreach ($messages as $id => $msg)
                <tr>
                    <td>{{ $msg['sender'] }}</td>
                    <td><a href="/messages/{{ $id }}">{{ \Illuminate\Support\Str::limit($msg['content'], 30) }}</a></td>
                </tr>
            @endforeach
        </table>
    @elseif(isset($message))
        <h2>Pesan dari {{ $message['sender'] }}</h2>
        <p>{{ $message['content'] }}</p>
        <a href="/messages">← Kembali ke Pesan</a>
    @endif
>>>>>>> 5882177 (Laporan 4)
</body>
</html>