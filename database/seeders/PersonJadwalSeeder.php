<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonJadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //senin
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 1,
            'jam' => 1,
            'hari_jam' => 11,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 1,
            'hari' => 1,
            'jam' => 2,
            'hari_jam' => 12,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 1,
            'jam' => 3,
            'hari_jam' => 13,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 1,
            'jam' => 4,
            'hari_jam' => 14,
            'dinas' => 0,
        ]);

        //selasa
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 2,
            'jam' => 1,
            'hari_jam' => 21,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 2,
            'jam' => 2,
            'hari_jam' => 22,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 1,
            'hari' => 2,
            'jam' => 3,
            'hari_jam' => 23,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 1,
            'hari' => 2,
            'jam' => 4,
            'hari_jam' => 24,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);

        //rabu
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 3,
            'jam' => 1,
            'hari_jam' => 31,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 1,
            'hari' => 3,
            'jam' => 2,
            'hari_jam' => 32,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 3,
            'jam' => 3,
            'hari_jam' => 33,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 1,
            'hari' => 3,
            'jam' => 4,
            'hari_jam' => 34,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);

        //kamis
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 1,
            'hari' => 4,
            'jam' => 1,
            'hari_jam' => 41,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 4,
            'jam' => 2,
            'hari_jam' => 42,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 1,
            'hari' => 4,
            'jam' => 3,
            'hari_jam' => 43,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 4,
            'jam' => 4,
            'hari_jam' => 44,
            'dinas' => 0,
        ]);

        //jumat
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 1,
            'hari' => 5,
            'jam' => 1,
            'hari_jam' => 51,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 5,
            'jam' => 2,
            'hari_jam' => 52,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 5,
            'jam' => 3,
            'hari_jam' => 53,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 1,
            'status' => 0,
            'hari' => 5,
            'jam' => 4,
            'hari_jam' => 54,
            'dinas' => 0,
        ]);


        //senin
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 1,
            'jam' => 1,
            'hari_jam' => 11,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 1,
            'jam' => 2,
            'hari_jam' => 12,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 1,
            'hari' => 1,
            'jam' => 3,
            'hari_jam' => 13,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 1,
            'hari' => 1,
            'jam' => 4,
            'hari_jam' => 14,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);

        //selasa
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 1,
            'hari' => 2,
            'jam' => 1,
            'hari_jam' => 21,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 2,
            'jam' => 2,
            'hari_jam' => 22,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 1,
            'hari' => 2,
            'jam' => 3,
            'hari_jam' => 23,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 2,
            'jam' => 4,
            'hari_jam' => 24,
            'dinas' => 0,
        ]);

        //rabu
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 1,
            'hari' => 3,
            'jam' => 1,
            'hari_jam' => 31,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 3,
            'jam' => 2,
            'hari_jam' => 32,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 3,
            'jam' => 3,
            'hari_jam' => 33,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 1,
            'hari' => 3,
            'jam' => 4,
            'hari_jam' => 34,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);

        //kamis
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 1,
            'hari' => 4,
            'jam' => 1,
            'hari_jam' => 41,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 4,
            'jam' => 2,
            'hari_jam' => 42,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 4,
            'jam' => 3,
            'hari_jam' => 43,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 4,
            'jam' => 4,
            'hari_jam' => 44,
            'dinas' => 0,
        ]);

        //jumat
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 5,
            'jam' => 1,
            'hari_jam' => 51,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 5,
            'jam' => 2,
            'hari_jam' => 52,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 5,
            'jam' => 3,
            'hari_jam' => 53,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 2,
            'status' => 0,
            'hari' => 5,
            'jam' => 4,
            'hari_jam' => 54,
            'dinas' => 0,
        ]);

        //senin
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 1,
            'jam' => 1,
            'hari_jam' => 11,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 1,
            'hari' => 1,
            'jam' => 2,
            'hari_jam' => 12,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 1,
            'hari' => 1,
            'jam' => 3,
            'hari_jam' => 13,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 1,
            'jam' => 4,
            'hari_jam' => 14,
            'dinas' => 0,
        ]);

        //selasa
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 1,
            'hari' => 2,
            'jam' => 1,
            'hari_jam' => 21,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 1,
            'hari' => 2,
            'jam' => 2,
            'hari_jam' => 22,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 2,
            'jam' => 3,
            'hari_jam' => 23,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 2,
            'jam' => 4,
            'hari_jam' => 24,
            'dinas' => 0,
        ]);

        //rabu
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 3,
            'jam' => 1,
            'hari_jam' => 31,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 3,
            'jam' => 2,
            'hari_jam' => 32,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 3,
            'jam' => 3,
            'hari_jam' => 33,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 3,
            'jam' => 4,
            'hari_jam' => 34,
            'dinas' => 0,
        ]);

        //kamis
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 4,
            'jam' => 1,
            'hari_jam' => 41,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 4,
            'jam' => 2,
            'hari_jam' => 42,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 1,
            'hari' => 4,
            'jam' => 3,
            'hari_jam' => 43,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 4,
            'jam' => 4,
            'hari_jam' => 44,
            'dinas' => 0,
        ]);

        //jumat
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 5,
            'jam' => 1,
            'hari_jam' => 51,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 1,
            'hari' => 5,
            'jam' => 2,
            'hari_jam' => 52,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 1,
            'hari' => 5,
            'jam' => 3,
            'hari_jam' => 53,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 3,
            'status' => 0,
            'hari' => 5,
            'jam' => 4,
            'hari_jam' => 54,
            'dinas' => 0,
        ]);

        //senin
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 1,
            'jam' => 1,
            'hari_jam' => 11,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 1,
            'hari' => 1,
            'jam' => 2,
            'hari_jam' => 12,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 1,
            'jam' => 3,
            'hari_jam' => 13,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 1,
            'jam' => 4,
            'hari_jam' => 14,
            'dinas' => 0,
        ]);

        //selasa
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 2,
            'jam' => 1,
            'hari_jam' => 21,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 2,
            'jam' => 2,
            'hari_jam' => 22,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 2,
            'jam' => 3,
            'hari_jam' => 23,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 1,
            'hari' => 2,
            'jam' => 4,
            'hari_jam' => 24,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);

        //rabu
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 1,
            'hari' => 3,
            'jam' => 1,
            'hari_jam' => 31,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 1,
            'hari' => 3,
            'jam' => 2,
            'hari_jam' => 32,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 3,
            'jam' => 3,
            'hari_jam' => 33,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 3,
            'jam' => 4,
            'hari_jam' => 34,
            'dinas' => 0,
        ]);

        //kamis
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 1,
            'hari' => 4,
            'jam' => 1,
            'hari_jam' => 41,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 4,
            'jam' => 2,
            'hari_jam' => 42,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 4,
            'jam' => 3,
            'hari_jam' => 43,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 4,
            'jam' => 4,
            'hari_jam' => 44,
            'dinas' => 0,
        ]);

        //jumat
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 5,
            'jam' => 1,
            'hari_jam' => 51,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 1,
            'hari' => 5,
            'jam' => 2,
            'hari_jam' => 52,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 5,
            'jam' => 3,
            'hari_jam' => 53,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 4,
            'status' => 0,
            'hari' => 5,
            'jam' => 4,
            'hari_jam' => 54,
            'dinas' => 0,
        ]);

        //senin
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 1,
            'jam' => 1,
            'hari_jam' => 11,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 1,
            'jam' => 2,
            'hari_jam' => 12,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 1,
            'jam' => 3,
            'hari_jam' => 13,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 1,
            'jam' => 4,
            'hari_jam' => 14,
            'dinas' => 0,
        ]);

        //selasa
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 1,
            'hari' => 2,
            'jam' => 1,
            'hari_jam' => 21,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 2,
            'jam' => 2,
            'hari_jam' => 22,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 2,
            'jam' => 3,
            'hari_jam' => 23,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 1,
            'hari' => 2,
            'jam' => 4,
            'hari_jam' => 24,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);

        //rabu
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 1,
            'hari' => 3,
            'jam' => 1,
            'hari_jam' => 31,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 3,
            'jam' => 2,
            'hari_jam' => 32,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 1,
            'hari' => 3,
            'jam' => 3,
            'hari_jam' => 33,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 1,
            'hari' => 3,
            'jam' => 4,
            'hari_jam' => 34,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);

        //kamis
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 4,
            'jam' => 1,
            'hari_jam' => 41,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 4,
            'jam' => 2,
            'hari_jam' => 42,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 4,
            'jam' => 3,
            'hari_jam' => 43,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 1,
            'hari' => 4,
            'jam' => 4,
            'hari_jam' => 44,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);

        //jumat
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 5,
            'jam' => 1,
            'hari_jam' => 51,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 0,
            'hari' => 5,
            'jam' => 2,
            'hari_jam' => 52,
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 1,
            'hari' => 5,
            'jam' => 3,
            'hari_jam' => 53,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => 5,
            'status' => 1,
            'hari' => 5,
            'jam' => 4,
            'hari_jam' => 54,
            'desk_kegiatan' => 'Kuliah',
            'dinas' => 0,
        ]);
    }
}
