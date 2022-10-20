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
                            @csrf
                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('name') }}" class="form-control register-field p-2" id="name" placeholder="Name"
                                    name="name">
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="text" value="{{ old('company') }}" class="form-control register-field p-2" id="company" placeholder="Company"
                                    name="company">
                                @error('company')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            

                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('vat') }}" class="form-control register-field p-2" id="vat" placeholder="VAT"
                                    name="vat">
                                @error('vat')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                 <!-- name field -->
                                 <input type="text" value="{{ old('website') }}" class="form-control register-field p-2" id="website" placeholder="Website"
                                    name="website">
                                @error('website')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                           

                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('zip_code') }}" class="form-control register-field p-2" id="zip_code" placeholder="Zip Code"
                                    name="zip_code">
                                @error('zip_code')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                 <!-- name field -->
                                 <input type="text" value="{{ old('phone') }}" class="form-control register-field p-2" id="phone" placeholder="Phone"
                                    name="phone">
                                @error('phone')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            

                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('country') }}" class="form-control register-field p-2" id="country" placeholder="Country"
                                    name="country">
                                @error('country')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                 <!-- name field -->
                                 <input type="text" value="{{ old('country_code') }}" class="form-control register-field p-2" id="country_code" placeholder="Country Code"
                                    name="country_code">
                                @error('country_code')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                           

                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('state') }}" class="form-control register-field p-2" id="state" placeholder="State"
                                    name="state">
                                @error('state')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                                <input type="text" value="{{ old('city') }}" class="form-control register-field p-2" id="city" placeholder="City"
                                    name="city">
                                @error('city')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                           

                            <div class="form-group">
                                <!-- name field -->
                                <input type="text" value="{{ old('address') }}" class="form-control register-field p-2" id="address" placeholder="Address"
                                    name="address">
                                @error('address')
                                    <span class="error">{{ $message }}</span>
                                @enderror
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
