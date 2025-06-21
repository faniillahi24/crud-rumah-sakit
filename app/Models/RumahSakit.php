<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $table = 'rumah_sakit';
    protected $fillable = [
        'nama', 'alamat', 'no_telp', 'tipe', 'latitude', 'longitude'
    ];
}
