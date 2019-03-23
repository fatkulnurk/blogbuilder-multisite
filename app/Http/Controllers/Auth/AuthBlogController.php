<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthBlogController extends Controller
{
    public function login()
    {

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->back();
    }
}
