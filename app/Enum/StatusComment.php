<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/18/2019
 * Time: 7:07 AM
 */

namespace App\Enum;

use MyCLabs\Enum\Enum;

class StatusComment extends Enum
{
    const AKTIVE         = 1;
    const PENDING       = 2;
    const SPAM          = 3;
    const TRASH         = 4;

    public static function getDescriptions($status)
    {
        $data = [
            self::AKTIVE        => 'Aktif',
            self::PENDING       => 'Pending',
            self::SPAM          => 'Spam',
            self::TRASH         => 'Trash'
        ];

        return $data[$status];
    }
}
