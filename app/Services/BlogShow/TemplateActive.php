<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/20/2019
 * Time: 11:46 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\BlogShow;

use App\Services\Agent\MobileDetect;

class TemplateActive
{
     // cek template yang aktif yang mana
    public static function get($blog)
    {
        if (MobileDetect::isDesktop()) {
            return self::desktop($blog);
        }

        return self::mobile($blog);
    }

    // menggunakan template dekstop
    public static function desktop($blog)
    {
        return $blog->templateDekstop;
    }

    // menggunakan template mobile
    public static function mobile($blog)
    {
        return $blog->templateMobile;
    }

}