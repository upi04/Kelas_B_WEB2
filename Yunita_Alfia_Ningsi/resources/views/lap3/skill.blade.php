<!DOCTYPE html>
<html>
<head>
    <title>Skill</title>
        <style>
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left;}
        th { background-color:rgb(197, 236, 183); width: 200px; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Halaman Skill</h2>
    <table>
        @foreach($skill as $skill => $value)
            <tr>
                <th>{{ $skill }}</th>
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
