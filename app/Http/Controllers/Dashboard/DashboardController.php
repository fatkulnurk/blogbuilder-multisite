<?php

namespace App\Http\Controllers\Dashboard;

use App\Model\Blog;
use App\Model\Chatroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs      = Blog::where('user_id', Auth::id())
            ->with('domain')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.index', compact('blogs'));
    }
}
