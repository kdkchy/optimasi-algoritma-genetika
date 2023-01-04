<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusUjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_ujian')->insert([
            'label' => 'Skripsi',
            'slug' => 'skripsi',
        ]);
        DB::table('status_ujian')->insert([
            'label' => 'Pra Skripsi',
            'slug' => 'pra_skripsi',
        ]);
    }
}
