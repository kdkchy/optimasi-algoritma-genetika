<?php

    function maping_array($array, $key){
        return array_combine(array_column($array, $key), $array);
    }

?>
