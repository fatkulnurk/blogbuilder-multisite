<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/23/2019
 * Time: 11:54 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Repository;

use App\Enum\PaginateEnum;
use App\Enum\StatusPostEnum;
use App\Model\Post;
use App\Scopes\PostStatusScope;
use Illuminate\Http\Request;

class PostRepository
{
    private $model;
    private $blogid;
    private static $instance = null;

    public function __construct($blogid)
    {
        $this->blogid = $blogid;
        $this->model = new Post();
    }

    public static function getInstance($blogid)
    {
        if (self::$instance == null) {
            self::$instance = new PostRepository($blogid);
        }

        return self::$instance;
    }

    public function indexAll(Request $request)
    {
        $posts = $this->model->with('categoryPost', 'user')
            ->orderBy('created_at', 'desc')
            ->paginate(PaginateEnum::POST);

        return $posts;
    }

    public function index($status, Request $request)
    {
        $posts = $this->model->with('categoryPost', 'user')
//            ->withoutGlobalScope(new PostStatusScope())
            ->where('blog_id', $this->blogid)
            ->where('status', $status)
            ->where('title','like', '%'.$request->get('title').'%')
            ->orderBy('created_at', 'desc')
            ->paginate(PaginateEnum::POST);

        return $posts;
    }

    public function indexTrash(Request $request)
    {

        $posts = $this->model
//            ->withTrashed()
            ->onlyTrashed()
            ->withoutGlobalScope(new PostStatusScope())
            ->with('categoryPost', 'user')
//            ->where('status', StatusPostEnum::TRASH)
            ->where('blog_id', $this->blogid)
            ->where('title','like', '%'.$request->get('title').'%')
            ->orderBy('updated_at', 'desc')
            ->paginate(PaginateEnum::POST);

        return $posts;
    }

    public function toTrash($id)
    {
        $post = $this->model->findOrFail($id);
//        $post->status = StatusPostEnum::TRASH;
//        $post->save();

        $post->delete();

        return true;
    }

    public function toDelete($id)
    {
        $post = $this->model
            ->withTrashed()
            ->withoutGlobalScope(PostStatusScope::class)
            ->where('id', $id)
            ->first();

        try {
            $post->forceDelete();
            return true;
        }catch (\Error $exception) {
            return false;
        }
    }
}