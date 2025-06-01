@extends('layouts.app') 
 
@section('content') 
<div class="row mt-5"> 
    <div class="col-lg-12 margin-tb"> 
        <div class="float-start"> 
            <h2>Tambah Buku Baru</h2> 
        </div> 
        <div class="float-end"> 
            <a class="btn btn-primary" href="{{ route('books.index') 
}}">Kembali</a> 
        </div> 
    </div> 
</div> 
    
@if ($errors->any()) 
    <div class="alert alert-danger mt-3"> 
        <strong>Error!</strong> Ada masalah dengan input Anda.<br><br> 
        <ul> 
            @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li> 
            @endforeach 
        </ul> 
    </div> 
@endif 
    
<form action="{{ route('books.store') }}" method="POST" class="mt-3"> 
    @csrf 
   
     <div class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Judul:</strong> 
                <input type="text" name="title" class="form-control" 
placeholder="Judul Buku"> 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Penulis:</strong> 
                <input type="text" name="author" class="form-control" 
placeholder="Nama Penulis"> 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Tahun:</strong> 
                <input type="number" name="year" class="form-control" 
placeholder="Tahun Terbit"> 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"> 
                <button type="submit" class="btn 
btn-primary">Simpan</button> 
        </div> 
    </div> 
</form> 
@endsection