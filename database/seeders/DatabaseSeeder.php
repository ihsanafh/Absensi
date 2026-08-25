<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(['email' => 'admin@alfaizein.sch.id'], [
            'role' => 'admin',
            'nama_lengkap' => 'Administrator',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'status_akun' => 'aktif',
        ]);

        User::updateOrCreate(['email' => 'guru@alfaizein.sch.id'], [
            'role' => 'guru',
            'nama_lengkap' => 'Budi Santoso, S.Pd',
            'username' => 'budi',
            'nip' => '198503122010011015',
            'password' => bcrypt('password'),
            'status_akun' => 'aktif',
        ]);
    }
}
