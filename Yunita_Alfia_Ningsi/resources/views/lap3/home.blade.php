<!DOCTYPE html>
<html>
<head>
    <title>home</title>
</head>
<body>
    <h2 style="text-align:center;">Halaman Utama</h2>
    
<div style="text-align: center;">
    <img src="{{ asset('images/foto.jpg') }}" alt="Foto Profil" style="max-width: 200px; border-radius: 100px; margin-bottom: 20px; box-shadow: 1px 3px 7px rgba(2, 2, 2, 0.6);">
</div>


    <table>
        @foreach($home as $hm => $value)
            <tr>
                <td>{{ $hm }}</td>
                <td>:</td>
                <td>{!! $value !!}</td>
            </tr>
        @endforeach
    </table>

    
 <div class="links" style="text-align: center;">
        <button>{!! $link['Blog'] !!}</button>
        <button>{!! $link['Skill'] !!}</button>
        <button>{!! $link['Message'] !!}</button>
    </div>
  
</body>
</html>

