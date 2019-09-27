<?php

namespace App\Http\Controllers\Blog;

use App\Enum\StatusComment;
use App\Http\Requests\Blog\CommentStore;
use App\Model\Post;
use App\Model\PostComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(CommentStore $request, $username, $slug)
    {
        $post = Post::where('slug', $slug)
            ->whereHas('blog.domain', function ($query) use ($username){
                $query->where('subdomain', $username);
            })->first();

        $postComment = new PostComment();
        $postComment->body = $request->body;
        $postComment->status = StatusComment::PENDING;
        $postComment->user()->associate(Auth::id());
        $postComment->post()->associate($post->id);
        $postComment->save();

        return redirect()->route('blog.show', [
            'username' => $username,
            'slug' => $slug,
        ])->with('success', 'Comment Successfully Posted');
    }
}
