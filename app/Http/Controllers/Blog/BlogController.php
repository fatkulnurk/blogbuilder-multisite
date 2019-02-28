<?php

namespace App\Http\Controllers\Blog;

use App\Model\Blog;
use App\Model\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index($username)
    {
        $blog   = Blog::where('subdomain', $username)->get();
        return view('blog.index', compact('blog'));
    }
}
