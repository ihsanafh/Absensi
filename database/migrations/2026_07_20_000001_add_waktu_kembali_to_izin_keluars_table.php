<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('izin_keluars', function (Blueprint $table) {
            $table->dateTime('waktu_kembali')->nullable()->after('waktu_izin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('izin_keluars', function (Blueprint $table) {
            $table->dropColumn('waktu_kembali');
        });
    }
};
