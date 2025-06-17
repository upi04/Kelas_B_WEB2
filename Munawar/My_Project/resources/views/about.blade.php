@extends('index')

@section('title', 'About')

@section('content')
    <h1>Tentang</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $items["nama"] }}</td>

        </tr>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td>{{ $items["nim"] }}</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>{{ $items["kelas"] }}</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>{{ $items["hobi"] }}</td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>:</td>
            <td>{{ $items["tempat"] }}</td>
        </tr>
        <tr>
            <td>Cita-Cita</td>
            <td>:</td>
            <td>{{ $items["cita_cita"] }}</td>
        </tr>
    </table>
    <br>
    <br>
@endsection
