<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\StoreBlog;
use App\Model\Blog;
use App\Model\CategoryBlog;
use App\Model\Domain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

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

    }
}
