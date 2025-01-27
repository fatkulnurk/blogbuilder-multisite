<?php

namespace App\Http\Controllers\Dashblog;

use App\Model\PostComment;
use App\Repository\PostCommentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    private $commentRepo;

    public function __construct(Request $request)
    {
        $this->commentRepo = PostCommentRepository::getInstance($request->segment(2));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $blogid)
    {
//        $comment = PostComment::with('post.blog', 'user')
//            ->whereHas('post.blog', function ($blog) use ($blogid){
//                $blog->where('blog_id', $blogid);
//            })
//            ->where('body','like', '%'.$request->title.'%')
//            ->orderBy('created_at', 'desc')
//
//            ->paginate(10);
        $comment = $this->commentRepo->indexAll($request);

        $search = $request->title;

        return view('dashblog.comment.index', compact('blogid', 'comment', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $blogid, $id)
    {
        if ($this->commentRepo->update($request, $blogid, $id)) {
            return redirect()->route('dashblog.comment.index', ['blogid' => $blogid])
                ->with('success', __('dashblog-comment.update.success'));
        }

        return redirect()->route('dashblog.comment.index', ['blogid' => $blogid])
            ->with('error', __('dashblog-comment.update.failed'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogId, $id)
    {
        if ($this->commentRepo->toTrash($id)) {
            return redirect()->route('dashblog.comment.index', ['blogid' => $blogId])
                ->with('success', __('dashblog-comment.delete.success'));
        }

        return redirect()->route('dashblog.comment.index', ['blogid' => $blogId])
            ->with('success', __('dashblog-comment.delete.failed'));
    }
}
