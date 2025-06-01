<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h2 style="text-align:center;">Halaman Skill</h2>
    <table>
        @foreach($skill as $skill => $value)
            <tr>
                <td>{{ $skill }}</td>
                <td>:</td>
                <td>{!! $value !!}</td>
            </tr>
        @endforeach
    </table>
       
    
 <div class="links" style="text-align: center;">
         <button>{!! $link['Home'] !!}</button>
         <button>{!! $link['Blog'] !!}</button>
         <button>{!! $link['Message'] !!}</button>
    </div>
</body>
</html>
