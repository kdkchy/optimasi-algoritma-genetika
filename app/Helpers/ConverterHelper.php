<?php

    function hari_jam($val){
        switch($val){
            //senin
            case 11:
                return 'Senin - 08:00';
            case 12:
                return 'Senin - 10:00';
            case 13:
                return 'Senin - 13:00';
            case 14:
                return 'Senin - 15:00';

            //selasa
            case 21:
                return 'Selasa - 08:00';
            case 22:
                return 'Selasa - 10:00';
            case 23:
                return 'Selasa - 13:00';
            case 24:
                return 'Selasa - 15:00';

            //rabu
            case 31:
                return 'Rabu - 08:00';
            case 32:
                return 'Rabu - 10:00';
            case 33:
                return 'Rabu - 13:00';
            case 34:
                return 'Rabu - 15:00';

            //kamis
            case 41:
                return 'Kamis - 08:00';
            case 42:
                return 'Kamis - 10:00';
            case 43:
                return 'Kamis - 13:00';
            case 44:
                return 'Kamis - 15:00';

            //jumat
            case 51:
                return 'Jumat - 08:00';
            case 52:
                return 'Jumat - 10:00';
            case 53:
                return 'Jumat - 13:00';
            case 54:
                return 'Jumat - 15:00';
        }

    }

?>
