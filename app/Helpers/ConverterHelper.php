<?php 

    function konversi_gender($val){
        return $val == 1 ? 'Laki - laki' : 'Perempuan';
    }

    function konversi_pendidikan_terakhir($val){
        $res = 0;
        switch ($val){
            case "S1": $res = 1; break;
            case "S2": $res = 1; break;
            case "S3": $res = 2; break;
        }
            
        return $res;
    }

    function konversi_mahasiswa_lulus($val) {
        $res = 0;
        if($val > 5) {
            $res = 3;
        } elseif($val > 3) {
            $res = 2;
        } else {
            $res = 1;
        }

        return $res;
    }


?>