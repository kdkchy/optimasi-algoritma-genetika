<?php
namespace App\Classes;

class NilaiCoreFactor{
    public static function akademik($aspek_akademiks){
        //bidang_keahlian
        //pendidikan_terakhir

        //rerata

        $nilai_core_factor_akademik = [];
        foreach($aspek_akademiks as $aspek_akademik){
            $temp = (object)[
                'dosen_id' => $aspek_akademik->dosen_id,
                'dosen_nama' => $aspek_akademik->dosen_nama,
                'bidang_keahlian' => $aspek_akademik->bidang_keahlian,
                'pendidikan_terakhir' => $aspek_akademik->pendidikan_terakhir,

                'ncf_akademik' => ($aspek_akademik->bidang_keahlian + $aspek_akademik->pendidikan_terakhir ) / 2,
            ];
            array_push($nilai_core_factor_akademik, $temp);
        }

        return $nilai_core_factor_akademik;

    }

    public static function nonAkademik($aspek_non_akademiks){
        //gender

        $nilai_core_factor_non_akademik = [];
        foreach($aspek_non_akademiks as $aspek_non_akademik){
            $temp = (object)[
                'dosen_id' => $aspek_non_akademik->dosen_id,
                'dosen_nama' => $aspek_non_akademik->dosen_nama,
                'gender' => $aspek_non_akademik->gender,

                'ncf_non_akademik' => $aspek_non_akademik->gender
            ];
            array_push($nilai_core_factor_non_akademik, $temp);
        }
        return $nilai_core_factor_non_akademik;

    }

}

?>