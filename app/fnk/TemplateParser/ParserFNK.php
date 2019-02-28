<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/26/2019
 * Time: 7:24 PM
 */

namespace App\fnk\TemplateParser;

class ParserFNK
{
    public static function compile($tag, $result, $data)
    {
        return str_replace($tag, $result, $data);
    }
}