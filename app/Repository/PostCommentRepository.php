<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/26/2019
 * Time: 5:37 PM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Repository;

use App\Enum\PaginateEnum;
use App\Enum\StatusComment;
use App\Model\PostComment;
use App\Scopes\PostCommentStatusScope;
use Illuminate\Http\Request;
use MyCLabs\Enum\Enum;

class PostCommentRepository implements RepositoryInterface
{
    private $model;
    private $blogid;
    private static $instance = null;

    public function __construct($blogid)
    {
        $this->blogId = $blogid;
        $this->model = new PostComment();
    }

    public static function getInstance($blogid)
    {
        if (self::$instance == null) {
            self::$instance = new PostCommentRepository($blogid);
        }

        return self::$instance;
    }

    public function indexAll(Request $request)
    {
        $commets = $this->model->with('user')
            ->withoutGlobalScope(new PostCommentStatusScope())
            ->where('body', 'like', '%'.$request->get('title').'%')
            ->orderBy('created_at', 'desc')
            ->paginate(PaginateEnum::COMMENT);

        return $commets;
    }

    public function index($status, Request $request)
    {
        $comments = $this->model
            ->withoutGlobalScope(new PostCommentStatusScope())
//            ->where('blog_id', $this->blogid)
            ->where('status', $status)
            ->where('body','like', '%'.$request->get('title').'%')
            ->orderBy('created_at', 'desc')
            ->paginate(PaginateEnum::COMMENT);

        return $comments;
    }

    public function indexTrash(Request $request)
    {
        $comments = $this->model
            ->onlyTrashed()
            ->withoutGlobalScope(new PostCommentStatusScope())
            ->with('user')
//            ->where('blog_id', $this->blogid)
            ->where('body','like', '%'.$request->get('title').'%')
            ->orderBy('updated_at', 'desc')
            ->paginate(PaginateEnum::COMMENT);

        return $comments;
    }

    public function create(Request $request, $blogId)
    {
        // TODO: Implement create() method.
    }

    public function update(Request $request, $blogId, $id)
    {
        /*
         * for checking status is available or not (anti inspect element)
         * @return boolean
         * */
        if (! StatusComment::status($request->status))
        {
            return false;
        }

        $comment = $this->findOrFailAll($id);

        /*
         * @return boolean
         * */
        if (! $comment->restore())
        {
            die('ada kesalahan');
        }

        $comment->status = $request->status;
        $comment->save();

        return true;
    }

    public function findOrFailAll($id)
    {
        $comment = $this->model
            ->where('id', $id)
            ->withTrashed()
            ->withoutGlobalScope(new PostCommentStatusScope())
            ->first();
        return $comment;
    }

    public function toTrash($id)
    {
        $comment = $this->model->findOrFail($id);
        $comment->status = StatusComment::TRASH;
        $comment->save();

        $comment->delete();

        return true;
    }

    public function toDelete($id)
    {

        $comment = $this->model
            ->withTrashed()
            ->withoutGlobalScope(PostCommentStatusScope::class)
            ->where('id', $id)
            ->first();

        try {
            $comment->forceDelete();
            return true;
        }catch (\Error $exception) {
            return false;
        }    }
}