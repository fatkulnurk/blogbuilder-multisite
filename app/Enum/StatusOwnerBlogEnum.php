<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/1/2019
 * Time: 5:26 PM
 */

namespace App\Enum;

use MyCLabs\Enum\Enum;

class StatusOwnerBlogEnum extends Enum
{
    /*
     * Owner = admin*/
    const ADMIN     = 1;
    const CREATOR   = 2;

    public static function getDescriptions($status)
    {
        $data = [
            self::ADMIN     => 'Admin',
            self::CREATOR   => 'Creator'
        ];

        return $data[$status];
    }
}