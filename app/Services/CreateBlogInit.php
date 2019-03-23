<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 2/27/2019
 * Time: 10:34 PM
 */

namespace App\Services;

use App\Enum\StatusOwnerBlogEnum;
use App\Enum\TemplateDefault;
use App\Enum\UncategoryEnum;
use App\Http\Requests\Dashboard\StoreBlog;
use App\Model\Blog;
use App\Model\CategoryPost;
use App\Model\Post;
use App\Model\Template;
use App\Model\TemplateLib;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreateBlogInit
{
    protected $blogId;
    protected $category;
    protected $template;

    public function run(StoreBlog $blog)
    {
        $this->createTemplate();
        $this->createBlog($blog, $this->template);
        $this->createOwnerBlog();
        $this->createCategory();
        $this->category = CategoryPost::first();
        $this->createPost();
    }

    private function createTemplate()
    {
        // make template
        $templateLib = TemplateLib::where('id', TemplateDefault::ALL)->first();
        $template                   = new Template();
        $template->stylesheet       = $templateLib->stylesheet;
        $template->javascript       = $templateLib->javascript;
        $template->code_header      = $templateLib->code_header;
        $template->code_footer      = $templateLib->code_footer;
        $template->code_index       = $templateLib->code_index;
        $template->code_category    = $templateLib->code_category;
        $template->code_search      = $templateLib->code_search;
        $template->code_page        = $templateLib->code_page;
        $template->code_post        = $templateLib->code_post;
        $template->code_about       = $templateLib->code_about;
        $template->code_404         = $templateLib->code_404;
        $template->template_lib_id  = $templateLib->id;
        $template->save();

        $this->template = $template;
    }

    private function createBlog(StoreBlog $blog, Template $template)
    {
        $blog = Blog::create([
//            'subdomain'         => Str::lower($blog->subdomain),
            'subdomain'         => $blog->subdomain,
            'domain_id'         => $blog->domain,
            'title'             => $blog->title,
            'short_desc'        => $blog->short_desc,
            'description'       => $blog->description,
            'user_id'           => Auth::id(),
            'category_blog_id'  => $blog->category_blog_id,
            'template_dekstop'  => $template->id,
            'template_mobile'   => $template->id,
            'meta_header'       => $blog->meta_header,
            'meta_footer'       => $blog->meta_footer,
            'logo'              => ''
        ]);

        $this->blogId  = $blog->id;
    }

    private function createOwnerBlog()
    {
        $createOwner = Blog::findOrFail($this->blogId);
        $createOwner->ownerBlog()->attach(Auth::id(), ['role' => StatusOwnerBlogEnum::ADMIN]);
    }

    private function createCategory()
    {
        $categoryPost               = new CategoryPost();
        $categoryPost->name         = UncategoryEnum::UNCATEGORY;
        $categoryPost->slug         = Str::slug($categoryPost->name);
        $categoryPost->description  = 'Uncategory';
        $categoryPost->blog_id      = $this->blogId;
        $categoryPost->save();
    }

    private function createPost()
    {
        $post = new Post();
        $post->title        = 'Hello World';
        $post->body         = 'This is my first post in this platform.';
        $post->thumbnail    = '';
        $post->slug         = Str::slug($post->title);
        $post->label        = 'first,hello word';
        $post->category_post_id = $this->category->id;
        $post->blog_id      = $this->blogId;
        $post->user_id      = Auth::id();
        $post->save();
    }
}