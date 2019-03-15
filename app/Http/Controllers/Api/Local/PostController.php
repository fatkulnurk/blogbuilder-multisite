<?php

namespace App\Http\Controllers\Api\Local;

use App\Http\Resources\Api\Local\PostCollection;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {
//        $post = new PostCollection(Post::paginate(10));

        $post = Post::select('id', )->paginate(10);

        return $post;
    }
}
