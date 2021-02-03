<?php

namespace Hillel;

class Str
{
    public static function after($subject, $after){
        $position=stripos($subject,$after);
        if(!$position){
            return $subject;
        }
        $str_lend = mb_strlen($after);
        return substr($subject,$position+$str_lend );


    }
}