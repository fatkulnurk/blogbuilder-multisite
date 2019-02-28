<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/26/2019
 * Time: 10:48 AM
 */

namespace App\Enum\TemplateEnum;

use MyCLabs\Enum\Enum;

class BlogHeader extends Enum
{
    const TITLE             = '<fnk:BlogHeader_title>';
    const SHORT_DESC        = '<fnk:BlogHeader_short_desc>';
    const DESCRIPTION       = '<fnk:BlogHeader_description>';

    public static function data()
    {

    }

    public static function getDetail()
    {

    }
}