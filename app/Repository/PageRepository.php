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
use App\Model\Page;
use App\Scopes\PageStatusScope;
use App\Scopes\PostStatusScope;
use Illuminate\Http\Request;

class PageRepository
{
    private $model;
    private $blogid;
    private static $instance = null;

    public function __construct($blogid)
    {
        $this->blogid = $blogid;
        $this->model = new Page();
    }

    public static function getInstance($blogid)
    {
        if (self::$instance == null) {
            self::$instance = new PageRepository($blogid);
        }

        return self::$instance;
    }

    public function indexAll(Request $request)
    {
        $pages = $this->model->with('user')
            ->withoutGlobalScope(new PageStatusScope())
            ->where('title','like', '%'.$request->get('title').'%')
            ->orderBy('created_at', 'desc')
            ->paginate(PaginateEnum::PAGE);

        return $pages;
    }

    public function index($status, Request $request)
    {
//        die(var_dump($status));

        $pages = $this->model
//            ->with('user')
            ->withoutGlobalScope(new PageStatusScope())
            ->where('blog_id', $this->blogid)
            ->where('status', $status)
            ->where('title','like', '%'.$request->get('title').'%')
            ->orderBy('created_at', 'desc')
            ->paginate(PaginateEnum::PAGE);

        return $pages;
    }

    public function indexTrash(Request $request)
    {

        $posts = $this->model
//            ->withTrashed()
            ->onlyTrashed()
            ->withoutGlobalScope(new PageStatusScope())
            ->with('user')
//            ->where('status', StatusPostEnum::TRASH)
            ->where('blog_id', $this->blogid)
            ->where('title','like', '%'.$request->get('title').'%')
            ->orderBy('updated_at', 'desc')
            ->paginate(PaginateEnum::PAGE);

        return $posts;
    }

    public function findOrFailAll($id): Page
    {
        $page = Page::where('id', $id)
            ->withTrashed()
            ->withoutGlobalScope(new PageStatusScope())
            ->first();
        return $page;
    }

    public function toTrash($id)
    {
        $page = $this->model->findOrFail($id);
        $page->delete();

        return true;
    }

    public function toDelete($id)
    {
        $page = $this->model
            ->where('id', $id)
            ->withTrashed()
            ->withoutGlobalScope(new PageStatusScope())
            ->first();

        try {
            $page->forceDelete();
            return true;
        }catch (\Error $exception) {
            return false;
        }
    }
}