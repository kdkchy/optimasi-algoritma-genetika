<?php
namespace App\Classes;

class NilaiTotal{
    public static function akademik($ncf, $nsf){
        //ncf (60), nsf (40)
        // (0.6 * ncf) + (0.4 * nsf)

        $nilai_total_akademik = [];
        foreach($ncf as $key=>$dt){
            $temp = (object)[
                'dosen_id' => $dt->dosen_id,
                'dosen_nama' => $dt->dosen_nama,

                'ncf' => $dt->ncf_akademik,
                'nsf' => $nsf[$key]->nsf_akademik,

                'n_satu' => (0.6 * $dt->ncf_akademik) + (0.4 * $nsf[$key]->nsf_akademik)
            ];
            array_push($nilai_total_akademik, $temp);
        }
        return $nilai_total_akademik;


    }

    public static function nonAkademik($ncf, $nsf){
        //ncf (60), nsf (40)
        // (0.6 * ncf) + (0.4 * nsf)

        $nilai_total_non_akademik = [];
        foreach($ncf as $key=>$dt){
            $temp = (object)[
                'dosen_id' => $dt->dosen_id,
                'dosen_nama' => $dt->dosen_nama,

                'ncf' => $dt->ncf_non_akademik,
                'nsf' => $nsf[$key]->nsf_non_akademik,

                'n_dua' => (0.6 * $dt->ncf_non_akademik) + (0.4 * $nsf[$key]->nsf_non_akademik)
            ];
            array_push($nilai_total_non_akademik, $temp);
        }
        return $nilai_total_non_akademik;

    }

}

?>