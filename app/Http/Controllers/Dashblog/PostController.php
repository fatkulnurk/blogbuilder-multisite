<?php

namespace App\Http\Controllers\Dashblog;

use App\Enum\StatusPostEnum;
use App\Http\Requests\Dashblog\StorePost;
use App\Http\Requests\Dashblog\UpdatePost;
use App\Model\Blog;
use App\Model\CategoryPost;
use App\Model\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $blogid)
    {
        $posts = Post::with('categoryPost', 'user')
            ->where('blog_id', $blogid)
            ->where('title','like', '%'.$request->title.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $search = $request->title;

        return view('dashblog.post.index', compact('blogid', 'posts', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blogid)
    {
        $category = CategoryPost::where('blog_id', $blogid)->get();
        return view('dashblog.post.add', compact('blogid', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request, $blogid)
    {
        $post = new Post();
        $post->title        = $request->title;
        $post->body         = $request->body;
        $post->thumbnail     = $request->file('image')->store('thumbnail/'.$blogid);
        if (Post::where('slug', Str::slug($request->title))->exists()) {
            $post->slug     = Str::slug($request->title.'-'.Random::string());
        } else {
            $post->slug     = Str::slug($request->title);
        }
        $post->label        = $request->label;
        $post->status       = $request->status;

        $post->categoryPost()->associate(CategoryPost::findOrFail($request->category));
        $post->blog()->associate(Blog::findOrFail($blogid));
        $post->user()->associate(User::findOrFail(Auth::id()));
        $post->updateUser()->associate(User::findOrFail(Auth::id()));
        $post->save();

        return redirect()->route('dashblog.post.index', ['blogid'=> $blogid])
            ->with('success', __('dashblog-post.store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blogid, $id)
    {
        $post = Post::with('blog.domain')->findOrFail($id);


        return redirect('//'.$post->blog->subdomain.'.'.$post->blog->domain->domain.'/'.$post->slug);
//        return __('error.empty');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($blogid, $id)
    {
        $post = Post::findOrFail($id);
        $category = CategoryPost::where('blog_id', $blogid)->get();
        return view('dashblog.post.edit', compact('blogid', 'post', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePost $request, $blogid, $id)
    {
        $post = Post::findOrFail($id);
        $post->title    = $request->title;
        $post->status   = $request->status;
        $post->body     = $request->body;

        if ($request->file('image')) {
            $post->thumbnail     = $request->file('image')->store('thumbnail/'.$blogid);
        }

        $post->label        = $request->label;
        $post->status       = $request->status;

        $post->categoryPost()->associate(CategoryPost::findOrFail($request->category));
        $post->updateUser()->associate(User::findOrFail(Auth::id()));

        $post->save();

        return redirect()->route('dashblog.post.index', ['blogid' => $blogid])
            ->with('success', __('dashblog-post.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogid, $id)
    {
        $page = Post::findOrFail($id);
        $page->status = StatusPostEnum::TRASH;
        $page->save();

        return redirect()->route('dashblog.post.index', ['blogid' => $blogid])
            ->with('success', __('dashblog-post.destroy'));
    }
}
