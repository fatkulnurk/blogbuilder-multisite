<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    public function styleCss()
    {
        return "sabar ya";
    }

    public function mainJs()
    {
        return "menuggu itu susah";
    }
}
