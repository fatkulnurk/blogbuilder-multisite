<?php

namespace App\Http\Controllers\BlogCatalog;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::with('user', 'categoryPost', 'blog.categoryBlog')
            ->orderBy('created_at', 'desc')->paginate(10);

        return view('blog_catalog.welcome', compact('posts'));
    }
}
