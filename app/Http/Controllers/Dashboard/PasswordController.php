<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\UpdatePassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('dashboard.account.edit-password');
    }

    public function update(UpdatePassword $request)
    {

        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();

        return redirect()->route('dashboard.account.index')->with('success', __('dashboard-profile.change-password-success'));
    }
}
