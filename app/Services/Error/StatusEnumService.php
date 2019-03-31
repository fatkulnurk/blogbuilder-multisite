<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 7:11 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Error;


class StatusEnumService
{
    public static function false()
    {
        die('Ups ada kesalahan, sepertinya status tidak ditemukan');
    }
}