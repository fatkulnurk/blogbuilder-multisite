<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/18/2019
 * Time: 6:58 AM
 */

namespace App\Enum;

use MyCLabs\Enum\Enum;

class FileUploadSizeEnum extends Enum
{
    const PROFILE       = 300;
    const IMAGE         = 2000;

    public static function getDescriptions($status)
    {
        $data = [
            self::PROFILE   => "300 KB",
            self::IMAGE     => "2000 KB"
        ];

        return $data[$status];
    }
}
