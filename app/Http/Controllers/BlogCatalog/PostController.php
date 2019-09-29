<?php

namespace App\Http\Controllers\BlogCatalog;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('blog_catalog.topics.home', compact('posts'));
    }

    public function show(Request $request, $categoryBlogName)
    {
        $posts = Post::with('blog.categoryBlog')
            ->whereHas('blog.categoryBlog', function ($categoryBlog) use ($categoryBlogName){
                $categoryBlog->where('slug', $categoryBlogName);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        if (count($posts) == 0) {
            abort(404);
        }

        return view('blog_catalog.topics.show', compact('posts', 'categoryBlogName'));
    }
}
