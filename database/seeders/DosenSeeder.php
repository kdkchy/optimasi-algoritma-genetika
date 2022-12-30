<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (1, 'Corabelle Pautard', 0, 'S1', 3, 7, 4);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (2, 'Nan Mustin', 0, 'S1', 1, 6, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (3, 'Antons Soonhouse', 1, 'S1', 3, 8, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (4, 'Audrie Phetteplace', 0, 'S2', 1, 3, 5);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (5, 'Bradney Flather', 1, 'S1', 3, 5, 5);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (6, 'Garland Humphrys', 0, 'S2', 2, 10, 4);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (7, 'Laina Craddy', 0, 'S1', 2, 10, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (8, 'Frasquito Giacomo', 1, 'S1', 3, 1, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (9, 'Nathanil Brendeke', 1, 'S1', 3, 6, 5);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (10, 'Ode O''Scollee', 1, 'S1', 3, 9, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (11, 'Tessie Downey', 0, 'S2', 2, 0, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (12, 'Lucienne Hadley', 0, 'S1', 1, 2, 5);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (13, 'Simonne Holstein', 0, 'S1', 2, 8, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (14, 'Merlina Palumbo', 0, 'S1', 1, 2, 4);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (15, 'Gwendolen Skala', 0, 'S1', 1, 8, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (16, 'Brandtr Bish', 1, 'S2', 1, 3, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (17, 'Nancie Corcut', 0, 'S2', 2, 4, 5);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (18, 'Nick Bertelmot', 1, 'S1', 3, 10, 4);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (19, 'Roberto Scambler', 1, 'S1', 3, 2, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (20, 'Felita Guyonnet', 0, 'S1', 3, 3, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (21, 'Jackson Josefsson', 1, 'S1', 2, 4, 4);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (22, 'Mureil Gilhouley', 0, 'S1', 1, 10, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (23, 'Tiphanie Crookshank', 0, 'S2', 1, 10, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (24, 'Josefa Skune', 0, 'S1', 1, 1, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (25, 'Morganica Hanaford', 0, 'S1', 3, 5, 5);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (26, 'Beauregard Whyke', 1, 'S2', 1, 3, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (27, 'Heidie Vasilchikov', 0, 'S2', 1, 4, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (28, 'Ali Cudbertson', 1, 'S2', 2, 0, 4);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (29, 'Ian O''Brallaghan', 1, 'S1', 3, 8, 4);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (30, 'Lauren Gilhool', 1, 'S2', 3, 3, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (31, 'Fairlie Oats', 1, 'S2', 3, 5, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (32, 'Thedric Whiteoak', 1, 'S2', 2, 3, 4);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (33, 'Derry McKinnon', 1, 'S2', 2, 5, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (34, 'Bernie Wingfield', 0, 'S1', 3, 6, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (35, 'Rosmunda MacGall', 0, 'S2', 3, 7, 4);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (36, 'Douglass Chasmoor', 1, 'S2', 1, 4, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (37, 'Tandie Hanbidge', 0, 'S2', 3, 3, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (38, 'Guilbert Brigg', 1, 'S2', 3, 6, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (39, 'Wake Hylands', 1, 'S1', 3, 7, 5);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (40, 'Morris Thorpe', 1, 'S1', 3, 6, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (41, 'Danya Manwaring', 0, 'S2', 3, 3, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (42, 'Ilka Harle', 0, 'S2', 2, 7, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (43, 'Estevan Guinan', 1, 'S1', 3, 6, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (44, 'Fitz Taill', 1, 'S1', 2, 8, 2);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (45, 'Kippy Rowcastle', 1, 'S1', 2, 0, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (46, 'Maible Stienham', 0, 'S2', 3, 2, 1);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (47, 'Boone Muck', 1, 'S1', 3, 7, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (48, 'Lutero Iseton', 1, 'S1', 3, 2, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (49, 'Carie Couling', 0, 'S2', 2, 4, 3);
            insert into dosen_pembimbings (id, nama, gender, pendidikan_terakhir, bidang_keahlian_id, mahasiswa_lulus, ketersediaan_waktu) values (50, 'Frasquito Garnam', 1, 'S1', 2, 3, 1);
        ");
    }
}
