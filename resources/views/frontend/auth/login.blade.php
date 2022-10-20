@extends('frontend.layouts.master')

@section('content')
<div class="container section-padding my-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <!-- Login container -->
            <div class="login-container p-5">
                <h3 class="text-center">Welcome Back</h3>
                <p class="py-3 text-center">By continuing you agree to our <span class="user-policy text-underline">User policy</span></p>
                <form action="{{ route('login.check') }}" method="POST">
                    @csrf
                    @include('frontend.includes.messages')
                    <!-- Input for email -->
                    <div class="form-group mb-4">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control login-field p-2" name="email" id="username" placeholder="Email">
                    </div>
                    <!-- Input for password -->
                    <div class="form-group">
                        <label for="email">Password</label>

                        <input type="password" class="form-control login-field p-sm-2" name="password" id="password" placeholder="Password">
                    </div>

                    <small class="forget-pass">
                        <p class="text-underline text-end my-4">Forget Password?</p>
                    </small>
                    <div class="form-group d-flex justify-content-center">
                        <input class="btn login-btn tritary-btn p-4" type="submit" value="Sign In">

                    </div>
                </form>
                <div class="optional-container mt-4">
                    <div class="hr"></div>
                    <p class="optional-container-text">OR</p>
                </div>
                <div class="existing-user mt-0">
                    <a href="{{ route('business.login') }}"><small>
                            <p class=" text-center">Login For Business</p>
                        </small></a>
                    <a href="{{ route('register') }}"><small>
                            <p class="text-center">New User? Sign up</p>
                        </small></a>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="login-image">
                <img src="{{ asset('frontend/assets/images/login-image.jpg') }}" class="w-100 h-100" alt="">
            </div>

        </div>
    </div>


</div>
@endsection