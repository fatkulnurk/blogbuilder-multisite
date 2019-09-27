<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use mysql_xdevapi\Exception;

class UserRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('userRoles')->get();
        return view('admin.user_roles.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user_roles.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::with('userRoles')->findOrFail($id);
        return view('admin.user_roles.edit', compact(
            'user',
            'roles'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = Role::findOrFail($request->get('role'));

        try {
            $user->userRoles()->attach($role);
        } catch (QueryException $exception) {
            return redirect()->route('admin.user-roles.edit', ['id' => $id])
                ->with(['error' => __('admin.user_roles.add.failed')]);
        };

        return redirect()->route('admin.user-roles.edit', ['id' => $id])
            ->with(['success' => __('admin.user_roles.add.success')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $role = Role::findOrFail($request->get('role'));

        if ($user->userRoles()->detach($role)) {
            return redirect()->route('admin.user-roles.edit', ['id' => $id])
                ->with(['success' => __('admin.user_roles.delete.success')]);
        }

        return redirect()->route('admin.user-roles.edit', ['id' => $id])
            ->with(['error' => __('admin.user_roles.delete.failed')]);
    }
}
