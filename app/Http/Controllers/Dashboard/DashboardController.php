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
        $chat = Chatroom::first();

        $blogs      = Blog::where('user_id', Auth::id())->orderBy('created_at', 'desc');
        return view('dashboard.index', compact('blogs', 'chat'));
    }
}
