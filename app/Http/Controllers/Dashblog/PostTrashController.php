<?php

namespace App\Http\Controllers\Dashblog;

use App\Model\Post;
use App\Repository\PostRepository;
use App\Scopes\PostStatusScope;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostTrashController extends Controller
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
        $posts = $this->postRepo->indexTrash($request);
        $search = $request->title;
        return view('dashblog.post.trash.index', compact('blogid', 'posts', 'search'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogid, $id)
    {
        if ($this->postRepo->toDelete($id)){
            return redirect()->route('dashblog.post-trash.index', ['blogid' => $blogid])
                ->with('success', __('dashblog-post.destroy-trash'));
        }

        return redirect()->route('dashblog.post-trash.index', ['blogid' => $blogid])
            ->with('error', __('dashblog-post.destroy-trash-failed'));
    }
}
