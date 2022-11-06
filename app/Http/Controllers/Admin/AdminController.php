<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('user'), 403);
        }

        $users = User::where('user_type', 'admin')->where('id', '!=', 1)->paginate(10);
        return view('admin.admins.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('user'), 403);
        }

        $roles = Role::where('id', '!=', 1)->get();
        return view('admin.admins.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('user'), 403);
        }

        $input = $request->except('roles');
        $input['user_type'] = 'admin';
        $user = User::create($input);
        $user->assignRole($request->roles);
        createLog('created new admin'); // activity log
        return redirect()->route('admin.admins.index')->with('success', 'Admin Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('user'), 403);
        }

        $roles = Role::where('id', '!=', 1)->get();
        $user_role = DB::table('model_has_roles')->select('*')->where('model_id', '=', $admin->id)
            ->pluck('role_id')
            ->all();
        return view('admin.admins.edit', compact('admin', 'roles', 'user_role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('user'), 403);
        }

        $input = $request->except('roles');
        if (!$request->password) {
            unset($input['password']);
        }

        $admin->update($input);
        $admin->roles()->detach();
        $admin->assignRole($request->roles);
        createLog('created new admin'); // activity log
        return redirect()->route('admin.admins.index')->with('success', 'Admin Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('user'), 403);
        }

        $admin->roles()->detach();
        $admin->delete();
        return redirect()->route('admin.admins.index')->with('success', 'Admin Deleted');
    }
}
