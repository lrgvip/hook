<?php

namespace Lrgvip\Hook;

/**
 * 
 */
class Hook{

    public function loveyou(){
        echo 'I Love You Money';
    }
    public static function misswho(){
        echo 'Miss You 365';
    }

    public static function isIp2Long(string $value){
        return preg_match('/^-?[0-9]+$/', (string) $value);
    }

    public static function isSha1(string $value){
        return preg_match('/^[a-fA-F0-9]{40}$/', $value);
    }

    public static function isPhone(string $value){
        return preg_match('/^0?(13|14|15|17|18|19)[0-9]{9}$/', $value);
    }

}


