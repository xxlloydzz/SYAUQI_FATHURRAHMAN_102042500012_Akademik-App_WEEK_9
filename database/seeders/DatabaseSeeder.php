<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $akun = [
            ['Admin Akademik', 'admin@akademik.com', 'admin123', 'admin'],
            ['Dosen Pengampu', 'dosen@akademik.com', 'dosen123', 'dosen'],
            ['Mahasiswa Contoh', 'mahasiswa@akademik.com', 'mahasiswa123', 'mahasiswa'],
        ];

        foreach ($akun as [$name, $email, $password, $role]) {
            User::firstOrCreate(
                ['email' => $email],
                ['name' => $name, 'password' => $password, 'role' => $role]
            );
        }
    }
}
