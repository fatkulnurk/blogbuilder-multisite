<?php

namespace App\Http\Controllers\Dashblog;

use App\Http\Requests\Dashblog\StoreCategory;
use App\Model\CategoryPost;
use App\Services\CategoryPostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    protected $categoryPostService;
    public function __construct()
    {
        $this->categoryPostService = new CategoryPostService(\request()->route()->parameter('blogid'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($blogid)
    {
        $category = $this->categoryPostService->all()->paginate(10);
        return view('dashblog.category.index', compact('blogid', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blogid)
    {
        return view('dashblog.category.add', compact('blogid'));
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
        $categoryPost->slug         = Str::slug($request->name);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
