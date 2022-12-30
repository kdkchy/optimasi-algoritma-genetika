<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Superadmin',
            'username' => 'superadmin',
            'password' => Hash::make('superadmin'),
            'status' => 1,
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Administrator',
            'username' => 'administrator',
            'password' => Hash::make('administrator'),
            'status' => 1,
            'role_id' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'Mahasiswa',
            'username' => 'mahasiswa',
            'password' => Hash::make('mahasiswa'),
            'status' => 1,
            'role_id' => 3,
        ]);
    }
}
