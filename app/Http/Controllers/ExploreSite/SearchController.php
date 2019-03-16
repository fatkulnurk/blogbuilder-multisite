<?php

namespace App\Http\Controllers\ExploreSite;

use App\Facades\Search\Search;
use App\Model\Blog;
use App\Model\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $key = $request->get('key');
        $keyword = $request->get('key');
        $type = $request->get('type');

        if ($type == 'blog') {
            $data = Search::blog($key)->paginate(10);
        } elseif ($type == 'profile') {
            $data = Search::user($key)->paginate(10);
        }elseif ($type == 'forum') {
            die('Belum jadi');
        } else {
            $data = Search::post($key)->with('blog.categoryBlog')->paginate(10);
        }

        return view('explore_site.search.index', [
            'key' => $key,
            'keyword' => $keyword,
            'data' => $data,
            'type' => $type
        ]);
    }
}
