<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/10/2019
 * Time: 10:16 AM
 */

namespace App\Enum;

use MyCLabs\Enum\Enum;

class FollowEnum extends Enum
{
    const FOLLOWING = 1;
    const FOLLOWER  = 2;

    public function getDescription($status)
    {
        $data = [
            self::FOLLOWING => 'Following',
            self::FOLLOWER  => 'Follower'
        ];

        return $data[$status];
    }
}