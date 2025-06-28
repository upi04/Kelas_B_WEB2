<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['mahasiswa_id', 'alamat', 'no_hp'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
//