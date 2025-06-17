@extends('home')

@section('title', 'About')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-3">Biodata Diri</h3>
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td>{{ $biodata['nama'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Jenis Kelamin</th>
                    <td>{{ $biodata['jeniskelamin'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Tempat Tanggal Lahir</th>
                    <td>{{ $biodata['tempat'] }}, {{ $biodata['tanggallahir'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Alamat</th>
                    <td>{{ $biodata['alamat'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Pendidikan</th>
                    <td>{{ $biodata['pendidikan'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Hobi</th>
                    <td>{{ $biodata['hobi'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Cita-Cita</th>
                    <td>{{ $biodata['cita-cita'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Pengalaman Organisasi</th>
                    <td>{{ $biodata['pengalamanorganisasi'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
