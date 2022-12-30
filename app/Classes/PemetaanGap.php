<?php
namespace App\Classes;

class PemetaanGap{
    public static function akademik($request, $dosens, $ideal, $gap_selisih, $gap_bobot){
        $aspek_akademik = [];
        foreach($dosens as $dosen){
            $akademik = (object)[
                'dosen_id' => $dosen->id,
                'dosen_nama' => $dosen->nama,

                'bidang_keahlian' => self::searchBobot($gap_selisih, $gap_bobot, $dosen->bidang_keahlian_id == $request->bidang_keahlian_id ? 0 : 1 - $ideal->bidang_keahlian), 
                'pendidikan_terakhir' => self::searchBobot($gap_selisih, $gap_bobot, $dosen->pendidikan_terakhir == $request->pendidikan_terakhir ? 0 : 1 - $ideal->pendidikan_terakhir),
                // 'pendidikan_terakhir' => self::searchBobot($gap_selisih, $gap_bobot, konversi_pendidikan_terakhir($dosen->pendidikan_terakhir) - $ideal->pendidikan_terakhir), 
                'mahasiswa_lulus' => self::searchBobot($gap_selisih, $gap_bobot, konversi_mahasiswa_lulus($dosen->mahasiswa_lulus) - $ideal->mahasiswa_lulus),                                
            ]; 
            array_push($aspek_akademik, $akademik);
        }
        return $aspek_akademik;
    }

    public static function nonAkademik($request, $dosens, $ideal, $gap_selisih, $gap_bobot){
        $aspek_non_akademik = [];
        foreach($dosens as $dosen){
            $non_akademik = (object)[
                'dosen_id' => $dosen->id,
                'dosen_nama' => $dosen->nama,

                // 'ketersediaan_waktu' => self::searchBobot($gap_selisih, $gap_bobot, $dosen->ketersediaan_waktu - $ideal->ketersediaan_waktu), 
                'ketersediaan_waktu' => self::searchBobot($gap_selisih, $gap_bobot, $dosen->ketersediaan_waktu == $request->ketersediaan_waktu ? 0 : 1 - $ideal->ketersediaan_waktu),
                'gender' => self::searchBobot($gap_selisih, $gap_bobot, $dosen->gender == $request->gender ? 0 : 1 - $ideal->gender),                
            ]; 
            array_push($aspek_non_akademik, $non_akademik);
        }
        return $aspek_non_akademik;
    }

    protected static function searchBobot(Array $selisih, Array $bobot, $x){
        if (count($selisih) === 0) return false;
        $low = 0;
        $high = count($selisih) - 1; //8
        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            // jika selisih[8] == -4
            // hasilnya bobot[8] => 1.00

            // [ 0, 1, -1, 2, -2, 3, -3, 4, -4] = selisih
            // [ 5.00, 4.50, 4.00, 3.50, 3.00, 2.50, 2.00, 1.50, 1.00] = bobot
            // selisih[4] == -4
            // seligih[4] = -2
            if($selisih[$mid] == $x) {
                return $bobot[$mid];
            }
            if ($x < $selisih[$mid]) {
                $high = $mid -1;
            }
            else {

                $low = $mid + 1;
            }
        }
        return false;
    }

}

?>