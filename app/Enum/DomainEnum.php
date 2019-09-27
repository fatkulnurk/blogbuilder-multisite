<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 4/10/2019
 * Time: 2:17 PM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Enum;

use MyCLabs\Enum\Enum;

class DomainEnum extends Enum
{
    const dibumicom = 1;

    private static $data = [
        self::dibumicom => 'dibumi.com',
    ];

    public static function getDescription($key)
    {
        return self::$data[$key];
    }
}