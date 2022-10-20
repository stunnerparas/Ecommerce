@extends('frontend.layouts.master')

@section('content')
    <div class="container">
        <div class="registration-container my-5" id="userRegister">
            <div class="row pl-md-5">
                <div class="col-lg-6 col-md-6  d-flex justify-content-end order-md-0 order-1">
                    <div class="container form-container  p-5">
                        <h4 class="text-center font-weight-bold mb-5">Registration</h4>
                        <!-- registration page -->
                        <form action="{{ route('register.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('name') }}" class="form-control register-field p-2" id="name" placeholder="Name"
                                    name="name">
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- email field -->
                                <input type="email" value="{{ old('email') }}" class="form-control register-field p-2" id="email" placeholder="Email"
                                    name="email">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- password field -->
                                <input type="password" class="form-control register-field p-2" id="password"
                                    placeholder="Password" name="password">
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- password conformation -->
                                <input type="password" class="form-control register-field p-2" id="confirm-password"
                                    placeholder="Confirm password" name="password_confirmation">
                                @error('password_confirmation')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-check-input ml-2" checked required type="checkbox" value=""
                                    id="flexCheckDefault">
                                <label class="form-check-label ml-5" for="flexCheckDefault">
                                    I agree to Terms and Conditions
                                </label>
                            </div>
                            <a href="{{ route('login') }}">
                                <p class="text-center text-underline">Already registered? Login</p>
                            </a>
                            <div class="text-center mt-4">
                                <input class="primary-btn p-3 registration-sumbit" type="submit" value="Sumbit">

                            </div>
                        </form>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-5  d-flex justify-content-md-end justify-content-center order-md-1 order-0 align-content-center">
                    <div class="img-container ">
                        <img class="registration-img-container img-fluid"
                            src="{{ asset('frontend/assets/images/others/undraw_web_shopping_re_owap.png') }}" alt=""
                            srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
