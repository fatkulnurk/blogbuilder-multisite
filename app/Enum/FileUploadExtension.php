<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/23/2019
 * Time: 8:41 AM
 */

namespace App\Enum;

use MyCLabs\Enum\Enum;

class FileUploadExtension extends Enum
{
    const PROFILE   = ['jpg', 'png', 'jpeg'];
    const IMAGE     = ['jpg', 'png', 'jpeg', 'bmp', 'gif'];
    const DOCUMENT  = ['doc', 'docx', 'txt', 'pdf'];

    public static function getImage()
    {
        return self::IMAGE;
    }

    public static function getProfile()
    {
        return self::PROFILE;
    }
}
