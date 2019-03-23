<?php

namespace App\Http\Controllers\Dashblog;

use App\Enum\UncategoryEnum;
use App\Http\Requests\Dashblog\StoreCategory;
use App\Http\Requests\Dashblog\UpdateCategory;
use App\Model\Blog;
use App\Model\CategoryPost;
use App\Model\Post;
use App\Services\CategoryPostService;
use App\Services\Random;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    protected $categoryPostService;
    public function __construct()
    {
//        $this->categoryPostService = new CategoryPostService(\request()->route()->parameter('blogid'));
        $this->categoryPostService = new CategoryPostService(\request('blogid'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $blogid)
    {
        $category = $this->categoryPostService
            ->all($request->title)
            ->paginate(10);

        return view('dashblog.category.index', compact('blogid', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blogid)
    {
        return view('dashblog.category.create', compact('blogid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request, $blogid)
    {
        $categoryPost = new CategoryPost();
        $categoryPost->name         = $request->name;

        if (CategoryPost::where('slug', Str::slug($request->name))->exists()) {
            $categoryPost->slug     = Str::slug($request->name.'-'.Random::string());
        } else {
            $categoryPost->slug     = Str::slug($request->name);
        }

        $categoryPost->description  = $request->description;
        $categoryPost->blog_id      = $blogid;
        $categoryPost->save();

        return redirect()->route('dashblog.category.index', ['id' => $blogid])->with('success', 'Kategory Berhasil di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blogid, $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($blogid, $id)
    {
        $category = CategoryPost::findOrFail($id);

        return view('dashblog.category.edit', compact('category', 'blogid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory $request, $blogid, $id)
    {
        $category = CategoryPost::findOrFail($id);
        $category->name         = $request->name;
        $category->description  = $request->description;
        $category->save();

        return redirect()->route('dashblog.category.index', ['blogid' => $blogid])
            ->with('success', __('dashblog-category.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogid, $id)
    {
        $blog = Blog::findOrFail($blogid);
        $uncategory = $blog->categoryPosts->where('name', UncategoryEnum::UNCATEGORY)->first();
        $category = CategoryPost::findOrFail($id);

        if ($uncategory->id == $id) {
            return redirect()->route('dashblog.category.index', ['blogid' => $blogid])
                ->with('error', __('dashblog-category.destroy-failed'));
        }

        $category->posts()->withTrashed()->update(['category_post_id' => $uncategory->id]);
        $category->delete();

        return redirect()->route('dashblog.category.index', ['blogid' => $blogid])
            ->with('success', __('dashblog-category.destroy'));
    }
}
