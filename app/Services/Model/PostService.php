<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/23/2019
 * Time: 11:20 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Model;


use App\Model\Post;

class PostService
{
    public static function getByStatus($blogid, $status, $title)
    {
        $posts = Post::with('categoryPost', 'user')
//            ->where('blog_id', $this->blogid)
            ->where('status', $status)
            ->where('title','like', '%'.$title.'%');
        return $posts;
    }
}