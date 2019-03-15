<?php

namespace App\Http\Controllers\ExploreSite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function profile($username)
    {
        return view('explore_site.profile');
    }
}
