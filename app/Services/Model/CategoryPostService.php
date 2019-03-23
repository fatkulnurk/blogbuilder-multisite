<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/23/2019
 * Time: 3:38 PM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Model;


use App\Enum\UncategoryEnum;

class CategoryPostService
{
    public static function getUncategory($blogid)
    {
        $blog = Blog::with('categoryPosts')
            ->whereHas('categoryPosts', function ($query){
                $query->where('name', UncategoryEnum::UNCATEGORY);
            })->first();

//        $uncategory = $blog->categoryPosts->where('name', UncategoryEnum::UNCATEGORY)->first();
//
        return $blog;
    }

}