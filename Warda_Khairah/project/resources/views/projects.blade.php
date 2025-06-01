@extends('home')

@section('title', 'Projects')

@section('content')

<div class="container mt-4">
    <h3 class="mb-3">Projects</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th scope="col">Nama Project</th>
                <th scope="col">Judul Project</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Project 1</th>
                <td>{{ $projects['nama1'] }}</td>
            </tr>
            <tr>
                <th scope="row">Project 2</th>
                <td>{{ $projects['nama2'] }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
