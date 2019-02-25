<?php
namespace App\Enum;

use MyCLabs\Enum\Enum;

class RolesEnum extends Enum
{
    const ROOT          = 1;
    const ADMINISTRATOR = 2;
    const MEMBER        = 3;
    const SECURITY      = 4;


    public static function getDescription($status)
    {
        $data = [
            self::ROOT          => 'Root',
            self::ADMINISTRATOR => 'Administrator',
            self::MEMBER        => 'Members',
            self::SECURITY      => 'Security'
        ];

        return $data[$status];
    }
}
