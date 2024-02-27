<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubSoal extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_soals')->inserts([
            'jenis_soal'=>'sma',
        ]);

        DB::table('sub_soals')->inserts([
            'jenis_soal'=>'mahasiswa',
        ]);
    }
}
