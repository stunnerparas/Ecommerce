@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5 d-flex justify-content-center align-content-center">
        <div class="login-container p-5">
            <h3 class="text-center">Login For Business</h3>
            <p>By continuing you agree to our <span class="user-policy text-underline">User policy</span></p>
            <form action="{{ route('login.check') }}" method="POST">
                @csrf
                @include('frontend.includes.messages')
                <input type="hidden" name="business_login" value="1" id="">
                <div class="form-group mb-4">
                    <input type="text" class="form-control login-field p-2" name="email" id="username"
                        placeholder="Email">
                </div>
                <div class="form-group">

                    <input type="password" class="form-control login-field p-sm-2" name="password" id="password"
                        placeholder="Password">
                </div>
                <small>
                    <p class="text-underline text-center my-4">Having trouble logging in?</p>
                </small>
                <div class="form-group d-flex justify-content-center">
                    <input class="btn login-btn primary-btn p-4" type="submit" value="SIGN IN">

                </div>
            </form>
            {{-- <div class="optional-container mt-4">
                <div class="hr"></div>
                <p class="optional-container-text">OR</p>
            </div>
            <div class="existing-user mt-0">
                <a href="{{ route('register') }}"><small>
                        <p class="text-underline text-center">New User? Sign up</p>
                    </small></a>

            </div> --}}
        </div>


    </div>
@endsection
