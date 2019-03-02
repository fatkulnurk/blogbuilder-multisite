<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/28/2019
 * Time: 7:57 PM
 */

namespace App\Services;

use App\Model\CategoryPost;

class CategoryPostService
{
    protected $blogId;

    public function __construct($blogId)
    {
        $this->blogId = $blogId;
    }

    public function all()
    {
        $category = CategoryPost::where('blog_id', $this->blogId);
        return $category;
    }

}