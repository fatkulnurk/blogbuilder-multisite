<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/28/2019
 * Time: 8:22 PM
 */

namespace App\Services;


use App\Model\Page;

class PageService
{
    protected $blogId;

    public function __construct($blogId)
    {
        $this->blogId = $blogId;
    }

    public function all()
    {
        $page = Page::where('blog_id', $this->blogId);
        return $page;
    }

}