<?php
namespace App\Http\Controllers\ContentDelivery;

use App\Enum\FileImageDefaultEnum;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\Post;
use App\Model\UserDetail;
use App\User;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function post($id)
    {
        $post = Post::findOrFail($id);
//        return response()->file(Storage::get($post->thumbnail));
//        return Storage::file($post->thumbnail);

        if (Storage::exists($post->thumbnail)) {
            return Storage::get($post->thumbnail);
        } else {
            return redirect()->to(FileImageDefaultEnum::POST);
        }
//        return Storage::download($post->thumbnail);
//        return Storage::url($post->thumbnail);
//        return response()->json(Storage::exists($post->thumbnail));
//        return response()->file(Storage::exists($post->thumbnail));
//        return response()->file($post->thumbnail);
//        return Storage::url($post->thumbnail);
    }

    public function user($id)
    {
        $user = User::with('userDetail')->findOrFail($id);

        if (Storage::exists($user->userDetail->profile)) {
            return Storage::get($user->userDetail->profile);
        } else {
            return redirect()->to(FileImageDefaultEnum::PROFILE);
        }
    }

    public function blog($id)
    {
        $blog = Blog::findOrFail($id);

        if (Storage::exists($blog->logo)) {
            return response(Storage::get($blog->logo), 200)->header('Content-Type', 'image/jpeg');
        } else {
            return redirect()->to(FileImageDefaultEnum::BLOG_LOGO);
        }
    }
}