<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Profile; 

class Mahasiswa extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama', 'nim','jurusan'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
