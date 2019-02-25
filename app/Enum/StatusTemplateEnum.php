<?php
namespace App\Enum;

use MyCLabs\Enum\Enum;

class StatusTemplateEnum extends Enum
{

    const ON    = 1;
    const OFF   = 2;

    public static function getDescriptions($status)
    {
        $data = [
            self::ON         => 'Aktif',
            self::OFF        => 'Mati'
        ];

        return $data[$status];
    }
}
