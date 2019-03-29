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
use App\Model\PostComment;
use App\Scopes\PostCommentStatusScope;
use Illuminate\Http\Request;

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
            ->where('blog_id', $this->blogid)
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
            ->where('blog_id', $this->blogid)
            ->where('title','like', '%'.$request->get('title').'%')
            ->orderBy('updated_at', 'desc')
            ->paginate(PaginateEnum::COMMENT);
    }

}