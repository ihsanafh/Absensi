<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    protected $fillable = [
        'user_id',
        'tanggal',
        'waktu_masuk',
        'waktu_keluar',
        'status_masuk',
        'foto_masuk',
        'foto_keluar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
