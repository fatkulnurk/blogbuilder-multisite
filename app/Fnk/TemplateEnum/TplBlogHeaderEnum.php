<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/26/2019
 * Time: 10:48 AM
 */

namespace App\Fnk\TemplateEnum;

use MyCLabs\Enum\Enum;

class TplBlogHeaderEnum extends Enum
{
    const TITLE             = '<fnk:BlogHeader_title></fnk>';
    const SHORT_DESC        = '<fnk:BlogHeader_short_desc></fnk>';
    const DESCRIPTION       = '<fnk:BlogHeader_description></fnk>';

    public static function data()
    {

    }

    public static function getDetail()
    {

    }
}