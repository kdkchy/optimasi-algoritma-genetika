<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GapMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gap_master')->insert([
            'selisih' => 0,
            'bobot_nilai' => 5,
            'keterangan' => 'Tidak ada selisih (kompetensi sesuai yang dibutuhkan)'
        ]);
        DB::table('gap_master')->insert([
            'selisih' => 1,
            'bobot_nilai' => 4.5,
            'keterangan' => 'Kompetensi individu kelebihan 1 tingkat'
        ]);
        DB::table('gap_master')->insert([
            'selisih' => -1,
            'bobot_nilai' => 4,
            'keterangan' => 'Kompetensi individu kekurangan 1 tingkat'
        ]);
        DB::table('gap_master')->insert([
            'selisih' => 2,
            'bobot_nilai' => 3.5,
            'keterangan' => 'Kompetensi individu kelebihan 2 tingkat'
        ]);
        DB::table('gap_master')->insert([
            'selisih' => -2,
            'bobot_nilai' => 3,
            'keterangan' => 'Kompetensi individu kekurangan 2 tingkat'
        ]);
        DB::table('gap_master')->insert([
            'selisih' => 3,
            'bobot_nilai' => 2.5,
            'keterangan' => 'Kompetensi individu kelebihan 3 tingkat'
        ]);
        DB::table('gap_master')->insert([
            'selisih' => -3,
            'bobot_nilai' => 2,
            'keterangan' => 'Kompetensi individu kekurangan 3 tingkat'
        ]);
        DB::table('gap_master')->insert([
            'selisih' => 4,
            'bobot_nilai' => 1.5,
            'keterangan' => 'Kompetensi individu kelebihan 4 tingkat'
        ]);
        DB::table('gap_master')->insert([
            'selisih' => -4,
            'bobot_nilai' => 1,
            'keterangan' => 'Kompetensi individu kekurangan 4 tingkat'
        ]);
    }
}
