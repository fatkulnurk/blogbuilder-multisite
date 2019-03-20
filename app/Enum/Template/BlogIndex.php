<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/18/2019
 * Time: 7:17 PM
 */

namespace App\Enum\Template;

use MyCLabs\Enum\Enum;

class BlogIndex extends Enum
{
    const subdomain = '{{ subdomain }}';
    const title = '{{ title }}';
    const short_desc = '{{ short_desc }}';
    const description = '{{ description }}';
}