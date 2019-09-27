<?php

namespace App\Http\Controllers\ExploreSite;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return "Ah masih kosong";
    }

    public function show(Request $request, $categoryBlogName)
    {
        $posts = Post::with('blog.categoryBlog')
            ->whereHas('blog.categoryBlog', function ($categoryBlog) use ($categoryBlogName){
                $categoryBlog->where('slug', $categoryBlogName);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('explore_site.topics.show', compact('posts', 'categoryBlogName'));
    }
}
