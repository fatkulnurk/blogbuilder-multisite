<?php

namespace App\Http\Controllers\Dashblog;

use App\Enum\StatusPostEnum;
use App\Http\Requests\Dashblog\StorePost;
use App\Http\Requests\Dashblog\UpdatePost;
use App\Model\Blog;
use App\Model\CategoryPost;
use App\Model\Post;
use App\Repository\PostRepository;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostDraftController extends Controller
{
    private $postRepo;

    public function __construct(Request $request)
    {
        $this->postRepo = PostRepository::getInstance($request->segment(2));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $blogid)
    {
        $posts = $this->postRepo->index(StatusPostEnum::DRAFT, $request);
        $search = $request->title;

        return $posts;

        return view('dashblog.post.draft.index', compact('blogid', 'posts', 'search'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogid, $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('dashblog.post-draft.index', ['blogid' => $blogid])
            ->with('success', __('dashblog-post.destroy'));
    }
}
