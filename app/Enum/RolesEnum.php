<?php
namespace App\Enum;

use MyCLabs\Enum\Enum;

class RolesEnum extends Enum
{
    const ROOT          = 1;
    const ADMINISTRATOR = 2;
    const MEMBER        = 3;
    const SECURITY      = 4;

    private static $data = [
        self::ROOT          => 'root',
        self::ADMINISTRATOR => 'admin',
        self::MEMBER        => 'member',
        self::SECURITY      => 'security'
    ];

    public static function getDescription($status)
    {
        $data = self::$data;

        return $data[$status];
    }

    public static function all()
    {
        return self::$data;
    }
}
