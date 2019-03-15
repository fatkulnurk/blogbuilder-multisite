<?php

namespace App\Http\Controllers\Blog;

use App\Fnk\TemplateEnum\TplBlogHeaderEnum;
use App\Fnk\TemplateEnum\TplPostEnum;
use App\Fnk\TemplateEnum\TplBlogIndexPostEnum;
use App\Model\Blog;
use App\Model\Post;
use App\Model\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fnk\TemplateEngine\FnkTemplate;

class BlogController extends Controller
{
    public function index($username)
    {
        $blog   = Blog::where('subdomain', $username)->first();
        $posts = Post::whereHas('blog.domain', function ($query) use ($username){
            $query->where('subdomain', $username);
        })->orderBy('created_at', 'desc')->get();

//        return view('blog.index', compact('blog', 'posts'));

        $template = $blog->templateDekstop;
//        $tplHeader = new FnkTemplate($template->code_header);
//        $tplHeader->set(TplBlogHeaderEnum::TITLE, $blog->title);
//        $tplHeader->set(TplBlogHeaderEnum::SHORT_DESC, $blog->short_desc);
//        $header = $tplHeader->render();

        $beforePosts    = strstr($template->code_index, TplBlogIndexPostEnum::LINE_START, true);

        return $beforePosts;
        $posts          = strpos($template->code_index, TplBlogIndexPostEnum::LINE_START);
        $posts          = strpos($posts, TplBlogIndexPostEnum::LINE_STOP);
        $afterPosts     = strstr($template->code_index, TplBlogIndexPostEnum::LINE_STOP);

        $tplIndexPost   = new FnkTemplate($template->code_index);


        return view('blog.index', compact( 'header', 'posts'));

    }

    public function show($username, $slug)
    {
        $blog = Blog::where('subdomain', $username)->first();
        $post = Post::where('slug', $slug)
            ->whereHas('blog.domain', function ($query) use ($username){
            $query->where('subdomain', $username);
        })->first();

        $template = $blog->templateDekstop;

        $tplHeader = new FnkTemplate($template->code_header);
        $tplHeader->set(TplBlogHeaderEnum::TITLE, $blog->title);
        $tplHeader->set(TplBlogHeaderEnum::SHORT_DESC, $blog->short_desc);
        $header = $tplHeader->render();

        $tplPost = new FnkTemplate($template->code_post);
        $tplPost->set(TplPostEnum::TITLE, $post->title);
        $tplPost->set(TplPostEnum::AUTHOR, $post->user->name);
        $post = $tplPost->render();

        return view('blog.post', compact('header', 'post'));
    }
}
