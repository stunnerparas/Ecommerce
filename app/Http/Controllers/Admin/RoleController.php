<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('role'), 403);
        }

        $roles = Role::where('name', '!=', 'super admin')->paginate(10);
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('role'), 403);
        }

        $permissions = Permission::all();

        $emp = [];
        foreach ($permissions as $permission) {
            $emp[$permission->parent][] = $permission;
        }
        $permissions = $emp;
        return view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('role'), 403);
        }

        $role = Role::create(['name' => $request->name]);
        $role->givePermissionTo($request->permission);

        return redirect()->route('admin.roles.index')->with('message', 'Created Successfully');
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
    public function edit(Role $role)
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('role'), 403);
        }

        $permissions = Permission::get();

        $emp = [];
        foreach ($permissions as $permission) {
            $emp[$permission->parent][] = $permission;
        }
        $permission = $emp;

        $rolePermissions = DB::table('role_has_permissions')->where('role_id', '=', $role->id)
            ->pluck('role_has_permissions.permission_id')
            ->all();

        // dd($rolePermissions);
        return view('admin.role.edit', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('role'), 403);
        }

        $role->update(['name' => $request->name]);
        $role->permissions()->detach();
        $role->givePermissionTo($request->permission);

        return redirect()->route('admin.roles.index')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if (!Auth::user()->hasAnyRole('super admin')) {
            abort_unless(Gate::allows('role'), 403);
        }

        $role->delete();
        $role->permissions()->detach();
        return redirect()->route('admin.roles.index')->with('message', 'Delete Successfully');
    }
}
