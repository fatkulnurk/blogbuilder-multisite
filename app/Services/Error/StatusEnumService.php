<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 6:56 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Error;

use App\Enum\StatusComment;
use App\Enum\StatusPageEnum;
use App\Enum\StatusPostEnum;

class StatusEnumService
{
    public static function comment($status)
    {
        if (StatusComment::status($status)) {
            return true;
        }

        return false;
    }

    public static function post($status)
    {
        if (StatusPostEnum::status($status)) {
            return true;
        }

        return false;
    }

    public static function page($status)
    {
        if (StatusPageEnum::status($status)) {
            return true;
        }

        return false;
    }

    public static function false()
    {
        die('Ups ada kesalahan, sepertinya status tidak ditemukan');
    }
}