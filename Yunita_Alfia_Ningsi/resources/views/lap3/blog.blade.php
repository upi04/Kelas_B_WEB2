<!DOCTYPE html>
<html>
<head>
    <title>blog</title>
</head>
<body>
    <div style="text-align: center;">
        <h2>Manfaat Bangun Pagi untuk Produktivitas: Kunci Sukses yang Sering Diremehkan</h2>
        <h4>Pernah dengar ungkapan “The early bird catches the worm”? Ternyata, pepatah itu bukan cuma kata-kata motivasi belaka. Banyak orang sukses—dari CEO perusahaan besar sampai atlet dunia—mengaku punya satu kebiasaan yang sama: bangun pagi.</h4>
    </div>
    <br>Tapi kenapa sih bangun pagi dianggap penting banget?</p>
    <table style="width: 80%;">
        @foreach($blog as $bg => $value)
            <tr>
                <td>{{ $bg }}</td>
                <td>:</td>
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
