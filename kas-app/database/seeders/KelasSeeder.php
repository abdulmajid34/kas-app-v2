<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            [
                'user_id' => 1,
                'kode_kelas' => '03TPLE004',
                'no_ruangan' => '209',
                'fakultas' => 'Ilmu Komputer',
                'program_studi' => 'Teknik Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
