<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 7:08 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Facades\StatusEnum;


use App\Enum\StatusComment;
use App\Enum\StatusPageEnum;
use App\Enum\StatusPostEnum;

class StatusEnumFactory
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
}