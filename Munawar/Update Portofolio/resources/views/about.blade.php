@extends('index')

@section('title', 'About')

@section('content')
    <h1>Tentang</h1>
    <table>
           <!-- <th align="left"> -->
        <tr>
            <td>Nama</td>
        
            <td>{{ $items["nama"] }}</td>

        </tr>
        <tr>
            <td>Nim</td>
            
            <td>{{ $items["nim"] }}</td>
        </tr>
        <tr>
            <td>Kelas</td>
            
            <td>{{ $items["kelas"] }}</td>
        </tr>
        <tr>
            <td>Hobi</td>
            
            <td>{{ $items["hobi"] }}</td>
        </tr>
        <tr>
            <td>TTL</td>
           
            <td>{{ $items["tempat"] }}</td>
        </tr>
        <tr>
            <td>Cita-Cita</td>
            
            <td>{{ $items["cita_cita"] }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            
            <td>{{ $items["alamat"] }}</td>
        <tr>
            <td>Email</td>
            
            <td>{{ $items["email"] }}</td>
        </tr>
        <tr>
            <td>Telepon</td>
            
            <td>{{ $items["telepon"] }}</td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            
            <td>{{ $items["pendidikan"] }}</td>
        </tr>
        <tr>
            <td>Keahlian</td>
            
            <td>{{ $items["keahlian"] }}</td>
        </tr>
        <tr>
            <td>Pengalaman</td>
            
            <td>{{ $items["pengalaman"] }}</td>
        </tr>
    </tr>
    </table>
    <br>
    <br>
    <a class="nav-link" href="produk">Klik Sini Untuk Liat pruduk</a>
@endsection
