<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function profile($username)
    {
        $user = User::with('userDetail', 'blogs')
            ->where('name', $username)
            ->first();
        if (!empty($user) || $user != null) {
            return view('user.profile', [
                'user' => $user
            ]);
        }
        abort(404);
    }
}
