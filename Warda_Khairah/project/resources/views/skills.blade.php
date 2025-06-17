@extends('home')

@section('title', 'Skills')

@section('content')

<div class="container mt-4">
    <h3 class="mb-3">Skill</h3>
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th scope="row">Keahlian</th>
                <td>{{ $keahlian }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
