<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IzinKeluar extends Model
{
    protected $fillable = [
        'user_id',
        'waktu_izin',
        'waktu_kembali',
        'estimasi_kembali',
        'alasan',
        'keterangan',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
