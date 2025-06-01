<!DOCTYPE html>
<html>
<head>
    <title>message</title>
        <style>
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background-color:rgb(197, 236, 183); width: 200px; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Message</h2>
    <table style="width: 80%;">
        @foreach($message as $ms => $value)
            <tr>
                <th>{{ $ms }}</th>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>

       
 <div class="links" style="text-align: center;">
         <button>{!! $link['Home'] !!}</button>
         <button>{!! $link['Skill'] !!}</button>
         <button>{!! $link['Blog'] !!}</button>
    </div>
</body>
</html>
