<?php

namespace App\Http\Controllers\Blog;

use App\Model\Blog;
use App\Services\Blog\TemplateData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lex\Parser;

class CategoryController extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function show($username, $slug)
    {
        $blog = Blog::where('subdomain', $username)->first();
        $post = $blog->posts()
            ->whereHas('categoryPost', function ($category) use ($slug){
                $category->where('slug', $slug);
            })
            ->with('user')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $category = $blog->categoryPosts()->get();
        $template = $blog->templateDekstop()->first();
        $templateHtml = $template->code_header
            .$template->code_index
            .$template->code_footer;

        $lex = new Parser();

        echo $lex->parse($templateHtml, [
            'blog' => $blog,
            'post' => $post,
            'category' => $category,
            'url' => TemplateData::url($this->request),
            'csrf' => TemplateData::csrf(),

            // local
            'pagination' => TemplateData::pagination($post),

        ]);
    }
}
