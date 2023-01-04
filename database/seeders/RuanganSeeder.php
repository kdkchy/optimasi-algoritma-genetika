<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruangan')->insert([
            'hari_jam' => '11',
            'label' => 'S.2.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '11',
            'label' => 'B.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '12',
            'label' => 'A.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '12',
            'label' => 'S.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '13',
            'label' => 'S.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '13',
            'label' => 'Q.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '14',
            'label' => 'A.4.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '14',
            'label' => 'B.4.4',
        ]);

        //selasa
        DB::table('ruangan')->insert([
            'hari_jam' => '21',
            'label' => 'S.2.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '21',
            'label' => 'B.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '22',
            'label' => 'A.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '22',
            'label' => 'S.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '23',
            'label' => 'S.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '23',
            'label' => 'Q.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '24',
            'label' => 'A.4.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '24',
            'label' => 'B.4.4',
        ]);

         //rabu
         DB::table('ruangan')->insert([
            'hari_jam' => '31',
            'label' => 'S.2.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '31',
            'label' => 'B.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '32',
            'label' => 'A.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '32',
            'label' => 'S.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '33',
            'label' => 'S.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '33',
            'label' => 'Q.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '34',
            'label' => 'A.4.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '34',
            'label' => 'B.4.4',
        ]);

        //kamis
        DB::table('ruangan')->insert([
            'hari_jam' => '41',
            'label' => 'S.2.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '41',
            'label' => 'B.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '42',
            'label' => 'A.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '42',
            'label' => 'S.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '43',
            'label' => 'S.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '43',
            'label' => 'Q.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '44',
            'label' => 'A.4.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '44',
            'label' => 'B.4.4',
        ]);

        //jumat
        DB::table('ruangan')->insert([
            'hari_jam' => '51',
            'label' => 'S.2.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '51',
            'label' => 'B.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '52',
            'label' => 'A.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '52',
            'label' => 'S.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '53',
            'label' => 'S.1.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '53',
            'label' => 'Q.4.4',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '54',
            'label' => 'A.4.2',
        ]);
        DB::table('ruangan')->insert([
            'hari_jam' => '54',
            'label' => 'B.4.4',
        ]);
    }
}
