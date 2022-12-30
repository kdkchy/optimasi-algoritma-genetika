<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class IdealMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ideal_master')->insert([
            'bidang_keahlian' => 5,
            'pendidikan_terakhir' => 2,
            'mahasiswa_lulus' => 3,
            'ketersediaan_waktu' => 5,
            'mahasiswa_lulus' => 3,
            'gender' => 2,
        ]);
    }
}
