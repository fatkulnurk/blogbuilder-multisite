<?php

namespace App\Http\Controllers\BlogCatalog;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\CategoryBlog;
use App\Services\Blog\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryBlog::all();
        $blog = Blog::orderBy('id', 'desc')
            ->paginate(10);
        return view('blog_catalog.category.home', compact('category', 'blog'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = CategoryBlog::findOrFail($id);
        $category = CategoryBlog::all();
        $blog = Blog::where('category_blog_id', $id)
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('blog_catalog.category.show', compact('cat', 'category', 'blog'));
    }
}
