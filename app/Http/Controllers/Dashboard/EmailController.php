<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Dashboard\UpdateEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function edit()
    {
        return view('dashboard.account.edit-email');
    }

    public function update(UpdateEmail $request)
    {
        $request->user()->fill([
            'email' => $request->email
        ])->save();

        return redirect()->route('dashboard.account.index')
            ->with('success', __('dashboard-profile.change-email-success'));
    }
}
