<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mahasiswa extends Model
{
    use SoftDeletes;

    protected $table = 'mahasiswas';

    protected $fillable = ['nama', 'nim', 'jurusan'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
