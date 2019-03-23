<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/21/2019
 * Time: 9:37 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Blog;


use App\Enum\PaginateEnum;
use App\Model\Blog;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogService
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getBlog()
    {
        return $this->blog;
    }

    public function getPosts()
    {
        $post = $this->blog->posts()->with('user')->orderBy('created_at', 'DESC')->paginate(PaginateEnum::BLOG_INDEX);

        return $post;
    }

    public function getPost($slug)
    {
        $username = $this->blog->subdomain;
        $post = Post::with('comments')
            ->where('slug', $slug)
            ->whereHas('blog.domain', function ($query) use($username){
                $query->where('subdomain', $username);
            })->first();

        if (! $post) {
            return $this->pageError();
        }

        return $post;
    }

    // list post by category
    public function getCategory($slug){

    }

    private function getCategorys()
    {
        $category = $this->blog->categoryPosts()->get();

        return $category;
    }

    public function getComment($slug)
    {
        $comment = $this->getPost($slug)->comments;
        return $comment;
    }

    public function getSearch($key)
    {

    }

    public function getPage($slug)
    {

    }

    public function pageError()
    {
        die('Halaman tidak ada');
    }


    public function pagination()
    {
        $model = $this->getPosts();

        return [
            'current_page' => $model->currentPage(),
            'first_page_url' => $model->url(1),
            'from' => $model->firstItem(),
            'last_page' => $model->lastPage(),
            'last_page_url' => $model->url($model->lastPage()),
            'next_page_url' => $model->nextPageUrl(),
            'per_page' => $model->perPage(),
            'prev_page_url' => $model->previousPageUrl(),
            'to' => $model->lastItem(),
            'total' => $model->total(),
        ];
    }

    public static function pageAvailable($model)
    {
        if (! $model) {
            self::pageError();
        }
    }

    public static function available($blog)
    {
        if (! $blog) {
            return view('blog.not-register');
        }
    }


    // Helper Global
    public function global(Request $request)
    {
        return [
            'blog' => $this->blog,
            'category' => $this->getCategorys(),
            'url' => self::url($request),
            'csrf' => self::csrf(),
            'auth_check' => Auth::check(),
            'auth'  => Auth::user(),
        ];
    }

    // helper

    // Get Information Url
    private static function url(Request $request)
    {
        return [
            'url_root' => $request->root(),
            'url' => $request->url(),
            'url_path' => $request->path(),
            'url_login' => route('login'),
            'url_logout' => route('logout.please'),
        ];
    }

    // get Csrf
    private static function csrf()
    {
        return [
            'csrf_field' => csrf_field(),
            'csrf_token' => csrf_token()
        ];
    }
}