<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/31/2019
 * Time: 9:00 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Error;

use App\Enum\UncategoryEnum;
use App\Model\CategoryPost;
use Illuminate\Support\Str;

class CategoryService
{
    public static function unCategory(CategoryPost $category)
    {
        if ($category->name == UncategoryEnum::UNCATEGORY || $category->slug == Str::slug(UncategoryEnum::UNCATEGORY)) {
//            die('Tidak bisa di edit');
            abort('404', 'Tidak bisa edit ini');
        }
    }
}