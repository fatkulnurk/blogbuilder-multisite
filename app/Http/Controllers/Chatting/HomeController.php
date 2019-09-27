<?php

namespace App\Http\Controllers\Chatting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('chatting.welcome');
    }
}
