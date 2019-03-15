<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/5/2019
 * Time: 8:20 PM
 */

namespace App\Fnk\TemplateEnum;

use MyCLabs\Enum\Enum;

class TplBlogIndexPostEnum extends Enum
{
    const LINE_START    = '<fnk:blog_posts></fnk>';
    const LINE_STOP     = '<fnk:blog_endposts></fnk>';
    const ID            = '<fnk:blogpost_id></fnk>';
    const TITLE         = '<fnk:blogpost_title></fnk>';
    const DESCRIPTION   = '<fnk:blogpost_description></fnk>';
    const AUTHOR        = '<fnk:blogpost_author></fnk>';
    const CATEGORY_NAME = '<fnk:blogpost_category></fnk>';
    const CATEGORY_LINK = '<fnk:blogpost_category_link></fnk>';
    const LABEL         = '<fnk:blogpost_labels></fnk>';
}