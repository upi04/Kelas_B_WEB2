<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['nama', 'nim', 'jurusan'];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
}