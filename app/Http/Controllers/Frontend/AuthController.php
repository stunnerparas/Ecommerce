<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusinessRegisterRequest;
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
            if (Auth::user()->user_type != 'business') {
                return redirect()->route('index');
            } else {
                Session::flush();
                Auth::logout();
                return redirect()->back()->with('error', 'Invalid Email/Password');
            }
        }

        return redirect()->back()->with('error', 'Invalid Email/Password');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function storeRegister(StoreRegisterRequest $request)
    {
        $input = $request->all();
        $input['user_type'] = 'customer';
        User::create();
        return redirect()->route('login')->with('success', 'Registered Successfully.');
    }

    public function logout()
    {
        // for business login
        if (Session::get('business')) {
            Session::forget('business');
        }
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }

    public function businessLogin()
    {
        return view('frontend.auth.business-login');
    }

    public function businessRegister()
    {
        return view('frontend.auth.business-register');
    }

    public function storeBusinessRegister(StoreBusinessRegisterRequest $request)
    {
        $input = $request->all();
        $input['user_type'] = 'business';
        $input['status'] = 'PENDING';
        User::create($input);

        return redirect()->route('business.login')->with('success', 'Registered Successfully.');
    }

    public function businessLoginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->user_type == 'business') {
                if (Auth::user()->status == 'APPROVED') {
                    Session::put('business', 'yes'); // for business login
                    return redirect()->route('index');
                } else {
                    Session::flush();
                    Auth::logout();
                    return redirect()->back()->with('error', 'Your Account has not been verified.');
                }
            } else {
                Session::flush();
                Auth::logout();
                return redirect()->back()->with('error', 'Invalid Email/Password');
            }
        }

        return redirect()->back()->with('error', 'Invalid Email/Password');
    }
}
