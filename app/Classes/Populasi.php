<?php
namespace App\Classes;
use Illuminate\Support\Facades\DB;


class Populasi{
    public static function pembangunanKromosom($id){
        $kromosom = DB::table('person_jadwal')
            ->select('person_id', 'status', 'hari', 'jam', 'hari_jam')
            ->where('person_id', $id)
            ->inRandomOrder()
            ->get();

        return $kromosom;
    }

    public static function rekombinasi($array){
        foreach(range(0, 18) as $ii){
            $new_arr[$ii] = $array[$ii+1];
        }
        $new_arr[19] = $array[0];
        return $new_arr;
    }

}

?>
