<!DOCTYPE html>
<html>
<head>
    <title>home</title>
        <style>
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color:rgb(197, 236, 183); width: 200px; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Halaman Utama</h2>
    
<div style="text-align: center;">
    <img src="{{ asset('images/foto.jpg') }}" alt="Foto Profil" style="max-width: 200px; border-radius: 100px; margin-bottom: 20px; box-shadow: 1px 3px 7px rgba(2, 2, 2, 0.6);">
</div>


    <table>
        @foreach($home as $hm => $value)
            <tr>
                <th>{{ $hm }}</th>
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

