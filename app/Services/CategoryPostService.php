<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/28/2019
 * Time: 7:57 PM
 */

namespace App\Services;

use App\Enum\UncategoryEnum;
use App\Model\Blog;
use App\Model\CategoryPost;

class CategoryPostService
{
    protected $blogId;

    public function __construct($blogId)
    {
        $this->blogId = $blogId;
    }

    public function all($title)
    {
        $category = CategoryPost::where('blog_id', $this->blogId);
        if ($title) {
            $category->where('name', 'like', '%'.$title.'%');
        }
        return $category;
    }


    public static function getUncategory($blogid)
    {
        $blog = Blog::with('categoryPosts')
            ->where('id', $blogid)
            ->whereHas('categoryPosts', function ($query){
                $query->where('name', UncategoryEnum::UNCATEGORY);
            })->first();

        return $blog;
    }

}