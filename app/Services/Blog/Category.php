<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/20/2019
 * Time: 11:45 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Blog;


class Category
{
    /*
     * Show Post In Category
     * {subdomain}.{domain}.{tld}/category/{slug}
     * */
    public static function getPost($request, $model)
    {
        return [
            'url' => self::url($request),
            'pagination' => self::pagination($model),
        ];
    }
}