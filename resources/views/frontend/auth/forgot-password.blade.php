@extends('frontend.layouts.master')

@section('content')
    <div class="container section-padding my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Login container -->
                <div class="login-container p-5">
                    <h3 class="text-center">Forgot Password?</h3>
                    <form action="{{ route('forget.password.post') }}" method="POST">
                        @csrf
                        @include('frontend.includes.messages')
                        <!-- Input for email -->
                        <div class="form-group mb-4">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control login-field p-2" name="email" id="username"
                                placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group d-flex justify-content-center">
                            <input class="btn login-btn tritary-btn p-4" type="submit" value="Reset">
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
