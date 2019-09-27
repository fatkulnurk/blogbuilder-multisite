<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 4/12/2019
 * Time: 11:30 PM
 * Email: fatkulnurk@gmail.com
 */
namespace App\Services\BlogShow;

use App\Enum\BlogShowEnum;
use Illuminate\Http\Request;
use Lex\Parser;


class Template
{
    public $blog;
    private $blogService    = null;

    private $request        = null;
    private $username       = null;
    private $slug           = null;
    private $type           = 0;

    private $templateActive;
    private $templateCode;
    private $templateDataMap;
    private $lexEngine;

    /*
     * GET data
     * */
    public function render($data)
    {
        // init data for request, username, slug and type
        $this->setInit($data);

        // get blog information from domain
        $this->blog = DomainService::getBlog($this->request, $this->username);

        // check blog Available or not
        $this->availableBlog($this->blog);

        // get Active Template
        $this->templateActive = TemplateActive::get($this->blog);

        // get Template Code
        $this->templateCode = new TemplateCode($this->templateActive);

        // Lex Template Engine Object
        $this->lexEngine = new Parser();

        // Blog Service
        $this->blogService = new BlogService($this->blog);

        // call template Data Map
        $this->templateDataMap = TemplateDataMap::getInstance([
            'request' => $this->request,
            'blog' => $this->blog,
            'blogService' => $this->blogService
        ]);

        // call data
        return $this->getPageType($this->type);
    }

    /*
     * Init Data Parameter
     * @return void
     * */
    private function setInit($data)
    {
//        if (isset($data->request)) {
//            $this->request = $data->request;
//        }
//
//        if (isset($data->slug)) {
//            $this->slug = $data->slug;
//        }
//
//        if (isset($data->username)) {
//            $this->username = $data->username;
//        }
//
//        if (isset($data->type)) {
//            $this->type = $data->type;
//        }
//
        if (isset($data['request'])) {
            $this->request = $data['request'];
        }

        if (isset($data['slug'])) {
            $this->slug = $data['slug'];
        }

        if (isset($data['username'])) {
            $this->username = $data['username'];
        }

        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }


    /*
     * Check if page not available
     * */
    public function availableBlog($blog)
    {
        if (!$blog) {
            return view('blog.not-register');
        }
    }

    /**
     * GetPage
     * */
    private function getPageType(int $type)
    {
        switch ($type) {
            case BlogShowEnum::HOMEPAGE:
                return $this->getIndex();
                break;
            case BlogShowEnum::POST:
                return $this->getPost();
                break;
            case BlogShowEnum::PAGE:
                break;
            case BlogShowEnum::CATEGORY:
                break;
            case BlogShowEnum::SEARCH:
                break;
            case BlogShowEnum::COMMENT:
                break;
            default:
                die('Haduh rusak.');
        }
    }

    /**
     * Index Page
     *
     **/
    private function getIndex()
    {
        return $this->lexEngine->parse(
            $this->templateCode->index(),
            $this->templateDataMap->getIndex()
        );
    }

    private function getPost()
    {
        return '';
    }

    private function getPage()
    {
        return '';
    }

    private function getPostCategory()
    {
        return '';
    }

    private function getSearch()
    {
        return '';
    }
}
