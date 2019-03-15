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
            self::PUBLISH   => '<div class="badge badge-primary">Publish</div>',
            self::DRAFT     => '<div class="badge badge-warning">Draft</div>',
            self::DELETE    => '<div class="badge badge-info">Delete</div>',
            self::TRASH     => '<div class="badge badge-danger">Trash</div>'
        ];

        return $data[$status];
    }

    public static function getAll()
    {
        $data = [
            self::PUBLISH   => 'Publish',
            self::DRAFT     => 'Draft'
        ];
        return $data;
    }
}
