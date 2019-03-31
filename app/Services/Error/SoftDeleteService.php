<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 7:15 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Error;


use phpDocumentor\Reflection\Types\Void_;

class SoftDeleteService
{

    /*
     * return true if sucess
     * return @ bool */
    public static function restore($data)
    {
        if (!$data->restore()) {
            die('ada kesalahan saat restore data, mohon hubungi admin.');
        }

        return true;
    }
}