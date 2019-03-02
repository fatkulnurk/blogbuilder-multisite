<?php

namespace App\Http\Middleware;

use App\Model\Blog;
use Closure;
use Illuminate\Support\Facades\Auth;

class isOwnerBlog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $blog = Blog::findOrFail($request->route()->parameter('blogid'));
        if ($blog) {
            if ($blog->where('user_id', Auth::id())->count() > 0) {
                return $next($request);
            }
        }
    }
}
