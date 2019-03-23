<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/20/2019
 * Time: 11:46 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Blog;


use App\Model\Blog;

class TemplateActive
{
     // cek template yang aktif yang mana
    public static function get(Blog $blog)
    {
        return self::desktop($blog);
    }

    // menggunakan template dekstop
    public static function desktop(Blog $blog)
    {
        $template = $blog->templateDekstop()->first();
        return $template;
    }

    // menggunakan template mobile
    public static function mobile(Blog $blog)
    {
        $template = $blog->templateDekstop()->first();
        return $template;
    }

}