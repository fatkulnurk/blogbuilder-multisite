<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\TemplateDefault;
use App\Http\Requests\Dashboard\StoreBlog;
use App\Model\Blog;
use App\Model\CategoryBlog;
use App\Model\Domain;
use App\Model\Template;
use App\Model\TemplateLib;
use App\Services\CreateBlogInit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    protected $blogInit;
    public function __construct()
    {
        $this->blogInit = new CreateBlogInit();
    }

    public function index()
    {
        return redirect()->route('dashboard.index', compact('blogs'));
    }

    public function create()
    {
        $domains = Domain::all();
        $categorys  = CategoryBlog::all();
        return view('dashboard.blog.add', compact('domains', 'categorys'));
    }

    public function store(StoreBlog $blog)
    {
        $this->blogInit->run($blog);
        return redirect()->route('dashboard.index')->with('success', 'berhasil membuat blog');
    }
}
