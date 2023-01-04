<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_person')->insert([
            'slug' => 'dosen',
            'label' => 'Dosen',
        ]);
        DB::table('status_person')->insert([
            'slug' => 'mahasiswa',
            'label' => 'Mahasiswa',
        ]);
    }
}
