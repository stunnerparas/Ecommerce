@extends('frontend.layouts.master')

@section('content')
    <div class="container section-padding my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Login container -->
                <div class="login-container p-5">
                    <h3 class="text-center">Reset Password</h3>
                    <form action="{{ route('reset.password.post') }}" method="POST">
                        @csrf
                        @include('frontend.includes.messages')
                        <input type="hidden" name="token" value="{{ $token ?? '' }}" id="">
                        <!-- Input for email -->
                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control login-field p-2" name="email" id="email"
                                placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control login-field p-2" name="password" id="password"
                                placeholder="New Password">
                            @error('password')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password">New Password Confirmation</label>
                            <input type="password" class="form-control login-field p-2" name="password_confirmation"
                                id="password-confirmation" placeholder="New Password Confirmation">
                            @error('password_confirmation')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group d-flex justify-content-center">
                            <input class="btn login-btn tritary-btn p-4" type="submit" value="Reset Password">
                        </div>
                    </form>
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
