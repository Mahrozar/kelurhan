<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'nip', 'nama', 'jabatan', 'alamat', 'no_telepon', 'email'
    ];
}
