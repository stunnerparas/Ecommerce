<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $users = User::latest()->where('user_type', 'business')->paginate(10);
        createLog('viewed business user details'); // activity log
        return view('admin.business-users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.business-users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'status' => $request->status
        ]);

        createLog('updated business user account status'); // activity log
        return redirect()->back()->with('success', 'Account has been ' . $request->status);
    }
}
