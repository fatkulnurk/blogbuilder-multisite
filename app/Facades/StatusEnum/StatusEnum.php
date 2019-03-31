<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 7:08 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Facades\StatusEnum;


use Illuminate\Support\Facades\Facade;

class StatusEnum extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'statusEnum';
    }
}