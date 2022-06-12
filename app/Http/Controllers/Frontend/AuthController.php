<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.auth.login');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('index');
        }

        return redirect()->route('login')->with('error', 'Invalid Email/Password');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function storeRegister(StoreRegisterRequest $request)
    {
        User::create($request->all());
        return redirect()->route('login')->with('success', 'Registered Successfully.');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }
}
