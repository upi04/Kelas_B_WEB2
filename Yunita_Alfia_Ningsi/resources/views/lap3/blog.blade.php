<!DOCTYPE html>
<html>
<head>
    <title>blog</title>
        <style>
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color:rgb(197, 236, 183); width: 200px; }
    </style>
</head>
<body>
    <div style="text-align: center;">
        <h2>Manfaat Bangun Pagi untuk Produktivitas: Kunci Sukses yang Sering Diremehkan</h2>
        <h4>Pernah dengar ungkapan “The early bird catches the worm”? Ternyata, pepatah itu bukan cuma kata-kata motivasi belaka. 
            Banyak orang sukses—dari CEO perusahaan besar sampai atlet dunia—mengaku punya satu kebiasaan yang sama: bangun pagi.
        Tapi kenapa sih bangun pagi dianggap penting banget?</h4>
    </div>
    <table style="width: 80%;">
        @foreach($blog as $bg => $value)
            <tr>
                <th>{{ $bg }}</th>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>

    
 <div class="links" style="text-align: center;">
        <button>{!! $link['Home'] !!}</button>
        <button>{!! $link['Skill'] !!}</button>
        <button>{!! $link['Message'] !!}</button>
    </div>
</body>
</html>
