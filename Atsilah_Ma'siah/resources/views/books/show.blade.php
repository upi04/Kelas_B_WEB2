@extends('layouts.app') 
 
@section('content') 
    <div class="row mt-5"> 
        <div class="col-lg-12 margin-tb"> 
            <div class="float-start"> 
                <h2>Detail Buku</h2> 
            </div> 
            <div class="float-end"> 
                <a class="btn btn-primary" href="{{ route('books.index') 
}}">Kembali</a> 
            </div> 
        </div> 
    </div> 
    
    <div class="row mt-3"> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Judul:</strong> 
                {{ $book->title }} 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Penulis:</strong> 
                {{ $book->author }} 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Tahun:</strong> 
                {{ $book->year }} 
            </div> 
        </div> 
    </div> 
@endsection