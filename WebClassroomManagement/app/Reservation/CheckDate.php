<?php

namespace App\Reservation;

class CheckDate {
    static function checkDay($day)
    {
        $res = null;
        if ($day == '0'){
            $res = 'Sunday';
        } elseif ($day == '1'){
            $res = 'Monday';
        } elseif ($day == '2'){
            $res = 'Tuesday';
        } elseif ($day == '3'){
            $res = 'Wednesday';
        } elseif ($day == '4'){
            $res = 'Thursday';
        } elseif ($day == '5'){
            $res = 'Friday';
        } else {
            $res = 'Saturday';
        }
        return $res;
    }

    static function checkTime($time)
    {
        $res = null;
        if($time == '0') {
            $res = '09.00-12.00';
        } else {
            $res = '13.00-16.00';
        }
        return $res;
    }
}
