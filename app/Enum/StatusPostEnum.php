<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/18/2019
 * Time: 7:05 AM
 */

namespace App\Enum;

use MyCLabs\Enum\Enum;

class StatusPostEnum extends Enum
{
    const PUBLISH   = 1;
    const DRAFT     = 2;
    const DELETE    = 3;
    const TRASH     = 4;

    public static function getDescriptions($status)
    {
        $data = [
            self::PUBLISH   => 'Publish',
            self::DRAFT     => 'Draft',
            self::DELETE    => 'Delete',
            self::TRASH     => 'Trash'
        ];

        return $data[$status];
    }
}
