<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nama', 'nim'];

    // Relasi ke model Profile (One to One)
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
