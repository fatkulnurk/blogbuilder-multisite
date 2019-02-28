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
        $blog = Blog::where('user_id', Auth::id())
            ->where('id', $request->route()->parameter('blogid'))->count();

        if ($blog > 0) {
            return $next($request);
        }
    }
}
