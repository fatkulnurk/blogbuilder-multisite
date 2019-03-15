<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/5/2019
 * Time: 9:34 PM
 */

namespace App\Fnk\TemplateEnum;

use MyCLabs\Enum\Enum;

class TplBlogFooterEnum extends Enum
{
    const TITLE             = '<fnk:blogfooter_title></fnk>';
    const SHORT_DESC        = '<fnk:blogfooter_short_desc></fnk>';
    const DESCRIPTION       = '<fnk:blogfooter_description></fnk>';

    const YEAR              = '<fnk:blogfooter_year></fnk>';
}