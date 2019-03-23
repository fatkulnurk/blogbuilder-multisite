<?php
namespace App\Enum;

use MyCLabs\Enum\Enum;

class StatusTemplateEnum extends Enum
{

    const ON    = 1;
    const OFF   = 2;

    private static function data()
    {
        $data = [
            self::ON         => 'Aktif',
            self::OFF        => 'Mati'
        ];

        return $data;
    }

    public static function getDescriptions($status)
    {
        $data = self::data();
        return $data[$status];
    }

    public static function getAll()
    {
        return self::data();
    }
}
