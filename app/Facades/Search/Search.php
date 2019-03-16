<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/15/2019
 * Time: 7:03 PM
 */

namespace App\Facades\Search;

use Illuminate\Support\Facades\Facade;

class Search extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'search';
    }
}