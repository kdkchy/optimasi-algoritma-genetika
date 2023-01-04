<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusKepesertaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_kepesertaan')->insert([
            'label' => 'Narasumber',
            'slug' => 'narasumber',
        ]);
        DB::table('status_kepesertaan')->insert([
            'label' => 'Pembimbing',
            'slug' => 'pembimbing',
        ]);
        DB::table('status_kepesertaan')->insert([
            'label' => 'Peserta',
            'slug' => 'peserta',
        ]);
    }
}
