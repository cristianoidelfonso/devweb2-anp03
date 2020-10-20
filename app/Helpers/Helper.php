<?php

namespace App\Helpers;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function text_limiter_caracter($str, $limit, $suffix = '...')
    {
        if (strlen($str) <= $limit) return $str;
        $limit = strpos($str, ' ', $limit);
        return substr($str, 0, $limit + 1) . $suffix;
    }

}
