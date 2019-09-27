<?php

namespace App\Http\Controllers\Blog;

use App\Enum\BlogShowEnum;
use App\Fnk\TemplateEnum\TplBlogHeaderEnum;
use App\Fnk\TemplateEnum\TplPostEnum;
use App\Fnk\TemplateEnum\TplBlogIndexPostEnum;
use App\Model\Blog;
use App\Model\Post;
use App\Model\Template;
use App\Services\BlogShow\Template as TemplateRenderData;
use App\Services\Blog\TemplateData;
use App\Services\Blog\TemplateRender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fnk\TemplateEngine\FnkTemplate;
use Illuminate\Pagination\LengthAwarePaginator;
use Lex\Parser;

class BlogController extends Controller
{
    private $template = null;

    public function __construct(TemplateRenderData $template)
    {
        $this->template = $template;
    }

    public function index(Request $request, $username)
    {
        $hahaha = $this->template->render([
            'request' => $request,
            'username' => $username,
            'type' => BlogShowEnum::HOMEPAGE
        ]);

        return response($hahaha, 200)
            ->header('Content-Type', 'text/html; charset=utf-8');
//
//        $blog = Blog::where('subdomain', $username)->first();
//
//        if (! $blog)
//        {
//            abort(404);
//        }
//
//        $tplRender = TemplateRender::getInstance($blog, $request);
//
//        return response($tplRender->getIndex(), 200)
////            ->header('Content-Type', 'text/plain');
//            ->header('Content-Type', 'text/html; charset=utf-8');
//
////        printf($tplRender->getIndex());

    }

    public function show(Request $request, $username, $slug)
    {
        $blog = Blog::where('subdomain', $username)->first();
        $tplRender = TemplateRender::getInstance($blog, $request);

        printf($tplRender->getPost($slug));
    }

    public function showPage(Request $request, $username, $slug)
    {
        $blog = Blog::where('subdomain', $username)->first();
        $tplRender = TemplateRender::getInstance($blog, $request);

        printf($tplRender->getPage($slug));
    }
}
