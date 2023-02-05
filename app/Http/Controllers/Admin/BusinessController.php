<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BusinessController extends Controller
{
    public function index()
    {
        abort_unless(Gate::allows('View Business Customers'), 403);

        $users = User::latest()->where('user_type', 'business')->paginate(10);
        createLog('viewed business user details'); // activity log
        return view('admin.business-users.index', compact('users'));
    }

    public function edit(User $user)
    {
        abort_unless(Gate::allows('Edit Business Customers Status'), 403);

        return view('admin.business-users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        abort_unless(Gate::allows('Edit Business Customers Status'), 403);

        $user->update([
            'status' => $request->status
        ]);
        sendCustomerMail($user->email, 'Business Account Verification', 'Your business account has been ' . $request->status);

        createLog('updated business user account status'); // activity log
        return redirect()->back()->with('success', 'Account has been ' . $request->status);
    }
}
