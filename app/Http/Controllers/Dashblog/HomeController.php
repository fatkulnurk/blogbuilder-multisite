<?php

namespace App\Http\Controllers\Dashblog;

use App\Http\Controllers\Controller;
use App\Model\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $blogs      = Blog::where('user_id', Auth::id())
            ->with('domain')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashblog.home', compact('blogs'));
    }
}
