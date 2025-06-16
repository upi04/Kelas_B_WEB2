<!DOCTYPE html>
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
</body>
</html>