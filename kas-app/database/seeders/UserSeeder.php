<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'nama_akun' => 'User Admin',
                'password' => bcrypt('password'),
                'role' => 'admin',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'ketua_kelas',
                'nama_akun' => 'User Ketua Kelas',
                'password' => bcrypt('password'),
                'role' => 'ketua_kelas',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'siswa',
                'nama_akun' => 'User Siswa',
                'password' => bcrypt('password'),
                'role' => 'siswa',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'bendahara',
                'nama_akun' => 'User Bendahara',
                'password' => bcrypt('password'),
                'role' => 'bendahara',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'user_test',
                'nama_akun' => 'User Test',
                'password' =>   bcrypt('password'),
                'role' => 'siswa',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'developer',
                'nama_akun' => 'Developer',
                'password' =>   bcrypt('password'),
                'role' => 'siswa',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        // Factory::factoryForModel(User::class)->count(50)->create();
    }
}
