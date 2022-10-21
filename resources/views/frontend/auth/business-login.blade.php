@extends('frontend.layouts.master')

@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Business login form -->
        <div class="col-lg-6">
            <div class="login-container p-5">
                <h3 class="text-center">Login For Business</h3>
                <p class="text-center py-3">By continuing you agree to our <span class="user-policy text-underline">User policy</span></p>
                <form action="{{ route('business.login.check') }}" method="POST">
                    @csrf
                    @include('frontend.includes.messages')
                    {{-- <input type="hidden" name="business_login" value="1" id=""> --}}
                    <!-- email input -->
                    <div class="form-group mb-4">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control login-field p-2" name="email" id="username" placeholder="Email">
                    </div>
                    <!-- Password input -->
                    <div class="form-group">
                        <label for="password">Password</label>

                        <input type="password" class="form-control login-field p-sm-2" name="password" id="password" placeholder="Password">
                    </div>
                    <small>
                        <p class="text-underline text-center my-4">Having trouble logging in?</p>
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
                    <a href="{{ route('business.register') }}"><small>
                            <p class="text-underline text-center">New User? Sign up for Business</p>
                        </small></a>

                </div>
                
            </div>

        </div>
        <!--  -->
        <div class="col-lg-6">
        <div class="login-image">

</div>
            
        </div>
    </div>


</div>
@endsection