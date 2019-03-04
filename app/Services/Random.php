<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/3/2019
 * Time: 2:24 PM
 */

namespace App\Services;


class Random
{
    public static function string($length = 3)
    {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }
}