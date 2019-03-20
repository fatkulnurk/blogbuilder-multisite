<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/20/2019
 * Time: 2:41 PM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Enum;


class TemplateComponentEnum
{
    const CODE_HEADER   = 1;
    const CODE_INDEX    = 2;
    const CODE_POST     = 3;
    const CODE_CATEGORY = 4;
    const CODE_PAGE     = 5;
    const CODE_SEARCH   = 6;
    const CODE_FOOTER   = 7;

    const STYLESHEET    = 11;
    const JAVASCRIPT    = 12;

    protected static function data()
    {
        return [
            self::CODE_HEADER   => 'Code Header',
            self::CODE_INDEX    => 'code_index',
            self::CODE_POST     => 'code_post',
            self::CODE_CATEGORY => 'code_category',
            self::CODE_PAGE     => 'code_page',
            self::CODE_SEARCH   => 'code_search',
            self::CODE_FOOTER   => 'code_footer',
            self::STYLESHEET    => 'Style.css',
            self::JAVASCRIPT    => 'Main.Js'
        ];
    }

    public static function getDesciptions($status)
    {
        $data = self::data();
        return $data[$status];
    }

    public static function getAll()
    {
        return self::data();
    }

    public static function getDesciptionTable($status)
    {
        $data = [
            self::CODE_HEADER   => 'code_header',
            self::CODE_INDEX    => 'code_index',
            self::CODE_POST     => 'code_post',
            self::CODE_CATEGORY => 'code_category',
            self::CODE_PAGE     => 'code_page',
            self::CODE_SEARCH   => 'code_search',
            self::CODE_FOOTER   => 'code_footer',
            self::STYLESHEET    => 'stylesheet',
            self::JAVASCRIPT    => 'javascript'
        ];

        return $data[$status];
    }
}