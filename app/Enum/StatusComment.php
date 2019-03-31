<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/18/2019
 * Time: 7:07 AM
 */

namespace App\Enum;

use Illuminate\Support\Arr;
use MyCLabs\Enum\Enum;

class StatusComment extends Enum
{
    const ACTIVE        = 1;
    const PENDING       = 2;
    const SPAM          = 3;
    const TRASH         = 4;

    private static $data = array(self::ACTIVE, self::PENDING, self::SPAM, self::TRASH);

    public static function getDescriptions($status)
    {
        $data = [
            self::ACTIVE        => '<div class="badge badge-primary">Aktif</div>',
            self::PENDING       => '<div class="badge badge-warning">Pending</div>',
            self::SPAM          => '<div class="badge badge-info">Spam</div>',
            self::TRASH         => '<div class="badge badge-danger">Trash</div>'
        ];

        return $data[$status];
    }

    public static function getAll()
    {
        $data = [
            self::ACTIVE        => 'Aktif',
            self::PENDING       => 'Pending',
            self::SPAM          => 'Spam',
            self::TRASH         => 'Trash'
        ];

        return $data;
    }

    /*
     * Show if data exist
     * @return : bool
     * */
    public static function status($status)
    {
        if (Arr::exists(self::$data, $status)) {
            return true;
        }

        return false;
    }
}
