<!DOCTYPE html>
<html>
<head>
    <title>message</title>
</head>
<body>
    <h2 style="text-align:center;">Message</h2>
    <table style="width: 80%;">
        @foreach($message as $ms => $value)
            <tr>
                <td>{{ $ms }}</td>
                <td>:</td>
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
