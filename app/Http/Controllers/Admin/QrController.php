<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function index()
    {
        return view('admin.qr.index');
    }

    public function generateToken(Request $request)
    {
        $type = $request->query('type', 'masuk');
        $timestamp = time();

        $payload = json_encode([
            'type' => $type,
            'timestamp' => $timestamp
        ]);

        $signature = hash_hmac('sha256', $payload, config('app.key'));
        $token = base64_encode($payload) . '.' . $signature;
        
        $durasi = (int) \App\Models\Pengaturan::getSetting('durasi_qr', 30);

        return response()->json([
            'token' => $token,
            'expires_in' => $durasi, // dynamic validity
            'type' => $type,
            'timestamp' => $timestamp
        ]);
    }
}
