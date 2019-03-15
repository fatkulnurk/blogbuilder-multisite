<?php

namespace App\Http\Controllers;

use App\Model\CategoryBlog;
use App\Model\Post;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        $categoryBlog = CategoryBlog::all();

        return view('welcome', compact('posts', 'categoryBlog'));
    }
}
