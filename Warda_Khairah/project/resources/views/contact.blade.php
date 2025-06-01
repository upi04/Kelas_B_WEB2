@extends('home')

@section('title', 'Contact')

@section('content')

<div class="container mt-4">
    <h3 class="mb-3">Kontak</h3>
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th scope="row">Instagram</th>
                <td>{{ $biodata['instagram'] }}</td>
            </tr>
            <tr>
                <th scope="row">Telepon</th>
                <td>{{ $biodata['telepon'] }}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{ $biodata['email'] }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
