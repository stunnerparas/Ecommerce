@extends('frontend.layouts.master')
@section('content')

<div class="help-center">
    <!-- banner image -->
    <div class="help-banner-image">
        <img src="{{ asset('frontend/assets/images/kashmeerahelp-center.png') }}" class="w-100 h-100" alt="">
    </div>


    <!-- Help center Content -->
    <div class="container help-center-container">
        <div class="row">
            <!-- Help box -->
            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                <a href="{{ route('helpProduct') }}">
                    <div class="help-box">
                        <div class="help-image">
                            <img src="{{ asset('frontend/assets/images/helpcenter_product.webp') }}" class="w-100 h-100" alt="">
                        </div>
                        <!-- Heading -->
                        <div class="help-box-content text-center">
                            <span class="help-heading">Product</span>
                            <p class="pt-2">Color,sizing & More</p>

                        </div>

                    </div>
                </a>
            </div>
            <!-- Help box -->
            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                <a href="{{ route('helpProduct') }}">
                    <div class="help-box">
                        <div class="help-image">
                            <img src="{{ asset('frontend/assets/images/helpcenter_product.webp') }}" class="w-100 h-100" alt="">
                        </div>
                        <!-- Heading -->
                        <div class="help-box-content text-center">
                            <span class="help-heading">Product</span>
                            <p class="pt-2">Color,sizing & More</p>

                        </div>

                    </div>
                </a>
            </div>
            <!-- Help box -->
            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                <a href="{{ route('helpProduct') }}">
                    <div class="help-box">
                        <div class="help-image">
                            <img src="{{ asset('frontend/assets/images/helpcenter_product.webp') }}" class="w-100 h-100" alt="">
                        </div>
                        <!-- Heading -->
                        <div class="help-box-content text-center">
                            <span class="help-heading">Product</span>
                            <p class="pt-2">Color,sizing & More</p>

                        </div>

                    </div>
                </a>
            </div>
            <!-- Help box -->
            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                <a href="{{ route('helpProduct') }}">
                    <div class="help-box">
                        <div class="help-image">
                            <img src="{{ asset('frontend/assets/images/helpcenter_product.webp') }}" class="w-100 h-100" alt="">
                        </div>
                        <!-- Heading -->
                        <div class="help-box-content text-center">
                            <span class="help-heading">Product</span>
                            <p class="pt-2">Color,sizing & More</p>

                        </div>

                    </div>
                </a>
            </div>
          


        </div>
    </div>
</div>







@endsection