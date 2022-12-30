<?php
namespace App\Classes;

class NilaiSecondaryFactor{
    public static function akademik($aspek_akademiks){
        //mahasiswa_lulus

        $nilai_secondary_factor_akademik = [];
        foreach($aspek_akademiks as $aspek_akademik){
            $temp = (object)[
                'dosen_id' => $aspek_akademik->dosen_id,
                'dosen_nama' => $aspek_akademik->dosen_nama,
                'mahasiswa_lulus' => $aspek_akademik->mahasiswa_lulus,

                'nsf_akademik' => $aspek_akademik->mahasiswa_lulus
            ];
            array_push($nilai_secondary_factor_akademik, $temp);
        }
        return $nilai_secondary_factor_akademik;
    }

    public static function nonAkademik($aspek_non_akademiks){
        //ketersediaan_waktu

        $nilai_secondary_factor_non_akademik = [];
        foreach($aspek_non_akademiks as $aspek_non_akademik){
            $temp = (object)[
                'dosen_id' => $aspek_non_akademik->dosen_id,
                'dosen_nama' => $aspek_non_akademik->dosen_nama,
                'ketersediaan_waktu' => $aspek_non_akademik->ketersediaan_waktu,

                'nsf_non_akademik' => $aspek_non_akademik->ketersediaan_waktu
            ];
            array_push($nilai_secondary_factor_non_akademik, $temp);
        }
        return $nilai_secondary_factor_non_akademik;
    }

}

?>