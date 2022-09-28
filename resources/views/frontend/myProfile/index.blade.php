@extends('frontend.layouts.master')
@section('content')
<!-- User profile section -->
<div class="user-profile">
    <div class="container-fluid">

        <div class="row">
            <!-- Profile Navigation -->
            <div class="col-lg-2 profile-nav">
                <h2 class="py-3">My Profile</h2>
                <!-- Navigation links -->
                <ul>
                    <li><a href="#"><span class="material-symbols-outlined">
                                home
                            </span>Home</a></li>
                    <li><a href="{{route('changeProfile')}}"><span class="material-symbols-outlined">
                                settings
                            </span>Setting</a></li>
                    <li><a href="{{route('my-orders')}}"><span class="material-symbols-outlined">
                                shopping_bag
                            </span>My Orders</a></li>
                </ul>


            </div>
            <!-- User Information -->
            <div class="col-lg-5 left-sec">
                <div class="profile-information-card ">
                    <!-- User Image -->
                    <div class="profile-image">
                        <img src="{{ asset('frontend/assets/images/krishnapokharel.jpg') }}" alt="">

                    </div>
                    <!-- Display user informations -->
                    <!-- user name -->
                    <div class="username py-4">

                        <!-- Name -->
                        <div class="name py-2">
                            <h2 class="text-center">Krishna Pokharel</h2>

                        </div>

                        <!-- contact-number -->

                        <div class="usernumber py-1">
                            <h5 class="text-center">+977 9745695847</h5>


                        </div>

                        <!-- User email -->
                        <div class="useremail py-1">
                            <h5 class="text-center">krishnapokharel.2022@gmail.com</h5>


                        </div>
                        <!-- User address -->
                        <div class="useraddress py-1">
                            <h5 class="text-center">Old Baneswor , Kathmandu</h5>

                        </div>


                    </div>






                </div>

            </div>
            <!-- user profile right sec -->
            <div class="col-lg-5 right-sec px-3">
                <!-- recent orders -->
                <div class="user-order">
                    <!-- heading -->
                    <div class="heading">
                        <h2 style="font-size: 30px;">Recent Orders</h2>
                        <a href="{{route('my-orders')}}">See all <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <!-- product 1 start -->
                    <div class="user-product-container d-flex py-2 justify-content-between">
                        <!-- image -->
                        <div class="product-name-image d-flex">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/classic-collection/DSC03699.jpg') }}" class="w-100 h-100" alt="">
                            </div>
                            <!-- product name -->
                            <div class="title px-4">
                                <h4>Long Cardian</h4>
                                <h5 class="py-1">Small</h5>
                            </div>

                        </div>

                        <!-- product-rate -->
                        <div class="product-rate" style="text-align: end;">
                            <h4>Rs 400</h4>
                            <h5 class="py-1">Qty 3</h5>
                        </div>

                    </div>
                    <!-- end -->
                    <!-- product 2 start -->
                    <div class="user-product-container d-flex py-2 justify-content-between">
                        <!-- image -->
                        <div class="product-name-image d-flex">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/classic-collection/DSC03699.jpg') }}" class="w-100 h-100" alt="">
                            </div>
                            <!-- product name -->
                            <div class="title px-4">
                                <h4>Long Cardian</h4>
                                <h5 class="py-1">Small</h5>
                            </div>

                        </div>

                        <!-- product-rate -->
                        <div class="product-rate" style="text-align: end;">
                            <h4>Rs 400</h4>
                            <h5 class="py-1">Qty 3</h5>
                        </div>

                    </div>
                    <!-- end -->
                </div>




            </div>
        </div>
    </div>
</div>


@endsection