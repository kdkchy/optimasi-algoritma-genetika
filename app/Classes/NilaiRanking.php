<?php
namespace App\Classes;

class NilaiRanking{
    public static function ranking($n_satu, $n_dua){
        //n1 (60), n2(40)
        // (0.6 * n1) + (0.4 * n2)

        $ranking = [];
        foreach($n_satu as $key=>$dt){
            $temp = (object)[
                'dosen_id' => $dt->dosen_id,
                'dosen_nama' => $dt->dosen_nama,

                'n_satu' => $dt->n_satu, 
                'n_dua' => $n_dua[$key]->n_dua,

                'ranking' => (0.6 * $dt->n_satu) + (0.4 * $n_dua[$key]->n_dua)
            ];
            array_push($ranking, $temp);
        }

        usort($ranking, function($a, $b) {
            return $a->ranking < $b->ranking;
        });

        return $ranking;

    }

    public static function rankingUO($n_satu, $n_dua){
        $ranking = [];
        foreach($n_satu as $key=>$dt){
            $temp = (object)[
                'dosen_id' => $dt->dosen_id,
                'dosen_nama' => $dt->dosen_nama,

                'n_satu' => $dt->n_satu, 
                'n_dua' => $n_dua[$key]->n_dua,

                'ranking' => (0.6 * $dt->n_satu) + (0.4 * $n_dua[$key]->n_dua)
            ];
            array_push($ranking, $temp);
        }

        return $ranking;

    }

}

?>