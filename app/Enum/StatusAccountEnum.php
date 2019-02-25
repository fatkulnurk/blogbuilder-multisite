<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/18/2019
 * Time: 6:58 AM
 */

namespace App\Enum;

use MyCLabs\Enum\Enum;

class StatusAccountEnum extends Enum
{
    const ACTIVE        = 1;
    const PENDING       = 2;
    const PENALTY       = 3;
    const BANNED        = 4;
    const DELETE        = 5;

    public static function getDescriptions($status)
    {
        $data = [
            self::ACTIVE        => 'Active',
            self::PENDING       => 'Pending Review',
            self::PENALTY       => 'Penalty',
            self::BANNED        => 'Banned',
            self::DELETE        => 'Delete',
        ];

        return $data[$status];
    }
}
