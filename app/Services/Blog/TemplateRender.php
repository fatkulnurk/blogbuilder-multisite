<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/21/2019
 * Time: 9:19 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Blog;

use App\Model\Blog;
use Illuminate\Http\Request;
use Lex\Parser;

class TemplateRender
{
    private $blog;
    private $templateActive;
    private $templateCodeService;
    private $templateDataMap;
    private $lexEngine;
    private static $instance = null;

    public function __construct(Blog $blog, Request $request)
    {
        $this->blog = $blog;
        $this->templateDataMap = TemplateDataMap::getInstance($blog, $request);
        $this->templateActive = TemplateActive::get($blog);
        $this->templateCodeService = new TemplateCode($this->templateActive);
        $this->lexEngine = new Parser();
    }

    public static function getInstance($blog, Request $request)
    {
        if (self::$instance == null){
            self::$instance = new TemplateRender($blog, $request);
        }

        return self::$instance;
    }

    public function getIndex()
    {
        return $this->lexEngine->parse(
            $this->templateCodeService->index(),
            $this->templateDataMap->getIndex()
        );
    }

    public function getPost($slug)
    {
        return $this->lexEngine->parse(
            $this->templateCodeService->post(),
            $this->templateDataMap->getPost($slug)
        );
    }

    public function getPage($slug)
    {
        return $this->lexEngine->parse(
            $this->templateCodeService->page(),
            $this->templateDataMap->getPage($slug)
        );
    }
}