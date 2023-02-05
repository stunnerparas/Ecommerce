@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="registration-container my-5">
            <div class="row pl-md-5">
                <div class="col-lg-12 col-md-12">
                    <div class="container form-container  p-5">
                        <h4 class="text-center font-weight-bold mb-5">Registration for Business</h4>
                        <!-- registration page -->
                        <form action="{{ route('business.register.store') }}" method="post">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('name') }}" class="form-control register-field p-2"
                                    id="name" placeholder="Name" name="name">
                                <input type="text" value="{{ old('company') }}" class="form-control register-field p-2"
                                    id="company" placeholder="Company" name="company">
                            </div>



                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('vat') }}" class="form-control register-field p-2"
                                    id="vat" placeholder="VAT" name="vat">
                                <!-- name field -->
                                <input type="text" value="{{ old('website') }}" class="form-control register-field p-2"
                                    id="website" placeholder="Website" name="website">
                            </div>



                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('zip_code') }}" class="form-control register-field p-2"
                                    id="zip_code" placeholder="Zip Code" name="zip_code">
                                <!-- name field -->
                                <input type="text" value="{{ old('phone') }}" class="form-control register-field p-2"
                                    id="phone" placeholder="Phone" name="phone">
                            </div>



                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('country') }}" class="form-control register-field p-2"
                                    id="country" placeholder="Country" name="country">
                                <!-- name field -->
                                <input type="text" value="{{ old('country_code') }}"
                                    class="form-control register-field p-2" id="country_code" placeholder="Country Code"
                                    name="country_code">
                            </div>



                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('state') }}" class="form-control register-field p-2"
                                    id="state" placeholder="State" name="state">
                                <input type="text" value="{{ old('city') }}" class="form-control register-field p-2"
                                    id="city" placeholder="City" name="city">
                            </div>



                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('address') }}" class="form-control register-field p-2"
                                    id="address" placeholder="Address" name="address">
                                <!-- email field -->
                                <input type="email" value="{{ old('email') }}" class="form-control register-field p-2"
                                    id="email" placeholder="Email" name="email">
                            </div>

                            <div class="form-group">
                                <!-- password field -->
                                <input type="password" class="form-control register-field p-2" id="password"
                                    placeholder="Password" name="password">
                                <!-- password conformation -->
                                <input type="password" class="form-control register-field p-2" id="confirm-password"
                                    placeholder="Confirm password" name="password_confirmation">
                            </div>

                            <div class="form-group">
                                <input class="form-check-input ml-2" checked required type="checkbox" value=""
                                    id="flexCheckDefault">
                                <label class="form-check-label ml-5" for="flexCheckDefault">
                                    I agree to Terms and Conditions
                                </label>
                            </div>
                            <a href="{{ route('business.login') }}">
                                <p class="text-center text-underline">Already registered? Login</p>
                            </a>
                            <div class="text-center mt-4">
                                <input class="primary-btn p-3 registration-sumbit" type="submit" value="Sumbit">

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
