<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/5/2019
 * Time: 5:54 PM
 */

namespace App\Services;


use App\Model\Post;

class ThumbnailService
{
    public static function get($id) {
        $post = Post::findOrFail($id);

    }

}