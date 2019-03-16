<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/15/2019
 * Time: 8:18 PM
 */

namespace App\Facades\Search;

use App\Model\Blog;
use App\Model\Post;
use App\User;

class SearchFactory
{
    public function blog($query)
    {
        return Blog::search($query);
    }

    public function post($query)
    {
        return Post::search($query);
    }

    public function user($query)
    {
        return User::search($query);
    }
}