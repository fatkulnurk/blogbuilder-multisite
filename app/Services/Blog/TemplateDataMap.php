<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/21/2019
 * Time: 12:41 PM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Blog;

use App\Model\Blog;
use App\Model\Template;
use Illuminate\Http\Request;

class TemplateDataMap
{
    private $blog;
    private $blogService;
    private $request;

    private static $instance = null;

    public function __construct(Blog $blog, Request $request)
    {
        $this->request = $request;
        $this->blog = $blog;
        $this->blogService = new BlogService($blog);
    }

    public static function getInstance(Blog $blog, Request $request)
    {
        if (self::$instance == null) {
            self::$instance = new TemplateDataMap($blog, $request);
        }

        return self::$instance;
    }

    public function getIndex()
    {
        return [
            'blog' => $this->blogService->getBlog(),
            'posts' => $this->blogService->getPosts(),
            'pagination' => $this->blogService->pagination(),
            'global' => $this->blogService->global($this->request)
        ];
    }

    public function getPost($slug)
    {
        return [
            'blog' => $this->blogService->getBlog(),
            'post' => $this->blogService->getPost($slug),
            'comment' => $this->blogService->getComment($slug),
            'pagination' => $this->blogService->pagination(),
            'global' => $this->blogService->global($this->request)
        ];
    }

    public function getPage()
    {

    }

    public function getSearch()
    {

    }

    public function getCategory()
    {

    }

    public function getPageError()
    {

    }
}