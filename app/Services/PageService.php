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

    public function all($title)
    {
        $page = Page::where('blog_id', $this->blogId);

        if ($title) {
            $page->where('title', 'like', '%'.$title.'%');
        }

        $page->with('user')
            ->orderBy('created_at', 'desc');

        return $page;
    }

}