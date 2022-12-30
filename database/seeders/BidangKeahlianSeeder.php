<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BidangKeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidang_keahlian')->insert([
            'kriteria' => 'Pemrograman Web',
        ]);
        DB::table('bidang_keahlian')->insert([
            'kriteria' => 'Android',
        ]);
        DB::table('bidang_keahlian')->insert([
            'kriteria' => 'Artificial Intelligence',
        ]);
    }
}
