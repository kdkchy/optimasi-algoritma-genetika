<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert([
            'status_person_id' => 1,
            'uniq_id' => 100000,
            'name' => 'None',
        ]);

        DB::table('persons')->insert([
            'status_person_id' => 2,
            'uniq_id' => 1000001,
            'name' => 'Kadek Cahya',
        ]);
        DB::table('persons')->insert([
            'status_person_id' => 1,
            'uniq_id' => 100001,
            'name' => 'Dosbing',
        ]);
        DB::table('persons')->insert([
            'status_person_id' => 1,
            'uniq_id' => 100002,
            'name' => 'Narsum Satu',
        ]);
        DB::table('persons')->insert([
            'status_person_id' => 1,
            'uniq_id' => 100003,
            'name' => 'Narsum Dua',
        ]);
    }
}
