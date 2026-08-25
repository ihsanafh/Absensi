<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('guru.dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Routes
    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/stats', [\App\Http\Controllers\Admin\DashboardController::class, 'stats'])->name('dashboard.stats');
        
        Route::resource('guru', \App\Http\Controllers\Admin\GuruController::class);
        Route::patch('guru/{guru}/restore', [\App\Http\Controllers\Admin\GuruController::class, 'restore'])->name('guru.restore');
        
        // QR Code Generator
        Route::get('/qr', [\App\Http\Controllers\Admin\QrController::class, 'index'])->name('qr.index');
        Route::get('/qr/token', [\App\Http\Controllers\Admin\QrController::class, 'generateToken'])->name('qr.token');

        // Data Presensi
        Route::get('/presensi', [\App\Http\Controllers\Admin\DataPresensiController::class, 'index'])->name('presensi.index');

        // Izin Keluar
        Route::get('/izin', [\App\Http\Controllers\Admin\IzinKeluarController::class, 'index'])->name('izin.index');
        Route::get('/izin/riwayat', [\App\Http\Controllers\Admin\IzinKeluarController::class, 'riwayat'])->name('izin.riwayat');
        Route::put('/izin/{id}', [\App\Http\Controllers\Admin\IzinKeluarController::class, 'update'])->name('izin.update');

        // Laporan
        Route::get('/laporan', [\App\Http\Controllers\Admin\LaporanController::class, 'index'])->name('laporan.index');
        Route::get('/laporan/cetak', [\App\Http\Controllers\Admin\LaporanController::class, 'cetak'])->name('laporan.cetak');
        Route::get('/laporan/csv', [\App\Http\Controllers\Admin\LaporanController::class, 'csv'])->name('laporan.csv');

        // Pengaturan
        Route::get('/pengaturan', [\App\Http\Controllers\Admin\PengaturanController::class, 'index'])->name('pengaturan.index');
        Route::post('/pengaturan', [\App\Http\Controllers\Admin\PengaturanController::class, 'update'])->name('pengaturan.update');
        
        // Log Aktivitas
        Route::get('/log', [\App\Http\Controllers\Admin\LogAktivitasController::class, 'index'])->name('log.index');
    });

    // Guru Routes
    Route::middleware('role:guru')->prefix('guru')->name('guru.')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Guru\DashboardController::class, 'index'])->name('dashboard');

        // Presensi Scanner
        Route::get('/presensi/scan', [\App\Http\Controllers\Guru\PresensiController::class, 'scan'])->name('presensi.scan');
        Route::post('/presensi/process', [\App\Http\Controllers\Guru\PresensiController::class, 'processScan'])->name('presensi.process');
        Route::get('/presensi/foto', [\App\Http\Controllers\Guru\PresensiController::class, 'foto'])->name('presensi.foto');
        Route::post('/presensi/store', [\App\Http\Controllers\Guru\PresensiController::class, 'store'])->name('presensi.store');
        Route::get('/presensi/success', [\App\Http\Controllers\Guru\PresensiController::class, 'success'])->name('presensi.success');

        // Izin Keluar
        Route::get('/izin', [\App\Http\Controllers\Guru\IzinKeluarController::class, 'index'])->name('izin.index');
        Route::post('/izin', [\App\Http\Controllers\Guru\IzinKeluarController::class, 'store'])->name('izin.store');
        Route::get('/izin/scan', [\App\Http\Controllers\Guru\IzinKeluarController::class, 'scan'])->name('izin.scan');
        Route::post('/izin/process', [\App\Http\Controllers\Guru\IzinKeluarController::class, 'processScan'])->name('izin.process');
        
        // Riwayat
        Route::get('/riwayat', [\App\Http\Controllers\Guru\RiwayatController::class, 'index'])->name('riwayat.index');
    });
});

require __DIR__.'/auth.php';
