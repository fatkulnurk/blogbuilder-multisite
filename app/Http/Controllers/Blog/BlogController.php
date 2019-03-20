<?php

namespace App\Http\Controllers\Blog;

use App\Fnk\TemplateEnum\TplBlogHeaderEnum;
use App\Fnk\TemplateEnum\TplPostEnum;
use App\Fnk\TemplateEnum\TplBlogIndexPostEnum;
use App\Model\Blog;
use App\Model\Post;
use App\Model\Template;
use App\Services\Blog\TemplateData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fnk\TemplateEngine\FnkTemplate;
use Illuminate\Pagination\LengthAwarePaginator;
use Lex\Parser;

class BlogController extends Controller
{
    public function index(Request $request, $username)
    {
        $blog = Blog::where('subdomain', $username)->first();
        $post = $blog->posts()->with('user')->orderBy('created_at', 'DESC')->paginate(10);
        $category = $blog->categoryPosts()->get();
        $template = $blog->templateDekstop()->first();
        $templateHtml = $template->code_header
                .$template->code_index
            .$template->code_footer;

        $tplTest = '
        <!HTML Doctype>
        <html>
        <head>
            <title>{{ title }}</title>
        </head>
        <body>
            {{ post }}            
            <div style="background: red">

                {{ title }} - {{ user.userdetail.first_name }}
                <hr>
                {{ labels }}
                    {{ item }} - 
                {{ /labels }}
            </div>
            {{ /post }}
            <hr>
            
            {{ category }}
            {{ name }}
            {{ /category }}
        </body>
        </html>
        ';

        $lex = new Parser();
        echo $lex->parse($templateHtml, [
            'blog' => $blog,
            'post' => $post,
            'category' => $category,
            'url' => TemplateData::url($request),
            'csrf' => TemplateData::csrf(),

            // local
            'pagination' => TemplateData::pagination($post),

        ]);
    }

    public function show(Request $request, $username, $slug)
    {
        $blog = Blog::where('subdomain', $username)->first();
        $post = Post::with('comments')
            ->where('slug', $slug)
            ->whereHas('blog.domain', function ($query) use ($username){
            $query->where('subdomain', $username);
        })->first();

        $category = $blog->categoryPosts()->get();

        $template = $blog->templateDekstop;

        $templateHtml = $template->code_header.
            $template->code_post.
            $template->code_footer;

        $lex = new Parser();
        echo $lex->parse($templateHtml, [
            'blog' => $blog,
            'post' => $post,
            'category' => $category,
            'url' => TemplateData::url($request),
            'csrf' => TemplateData::csrf(),

            // local
            'comment' => $post->comments,
        ]);
    }

}
