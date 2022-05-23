<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChangePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard')
                ->with('success', 'You have Successfully loggedin');
        } else {
            return redirect()->back()->with('error', 'Invalid Email/Password');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function changePassword()
    {
        return view('admin.auth.change-password');
    }

    public function changePasswordStore(StoreChangePasswordRequest $request)
    {
        $user = User::findorFail(Auth::user()->id);
        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => $request->new_password
            ]);
        } else {
            return redirect()->back()->with('error', 'Invaild Current Password!');
        }
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Password Changed Successfully');
    }
}
