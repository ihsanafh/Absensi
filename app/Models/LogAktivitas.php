<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class LogAktivitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'aktivitas',
        'status',
        'device_info'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Helper cepat dan efisien untuk mencatat log aktivitas.
     */
    public static function catat($aktivitas, $status = 'Berhasil', $user_id = null)
    {
        // Hindari load yang berat, rekam secara statis tanpa delay
        self::create([
            'user_id' => $user_id ?? Auth::id(),
            'aktivitas' => $aktivitas,
            'status' => $status,
            'device_info' => Request::userAgent()
        ]);
    }
}
