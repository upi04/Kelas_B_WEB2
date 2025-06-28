<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class book extends Model
{
     use HasFactory;

    // Kolom yang boleh diisi massal
    protected $fillable = [
        'title',
        'author',
        'published_year',
        'description',
        'genre',
        'stock',
    ];
}
