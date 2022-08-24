@extends('frontend.layouts.master')

@section('content')



<!-- Order Details -->
<div class="orderDetails py-5">
    <div class="container-fluid">
        <div class="row">
            <!-- Left section -->
            <div class="col-lg-8 px-5 order-detail-left">
                <!-- Order detail heading -->
                <div class="order-detail-heading d-flex w-100 justify-content-between">
                    <h2>My Orders</h2>
                    <!-- Total price -->
                    <div class="total-price d-flex py-2">
                        <h4>Total:</h4>
                        <h4 class="mx-1">$1234</h4>
                    </div>
                </div>

                <div class="order-detail-container py-4">
                    <!--previous order details -->

                    <div class="order-detail-box my-3">



                        <!-- Order detail top -->
                        <div class="order-detail-top">
                            <!-- Order number -->
                            <div class="orderNumber d-flex">
                                <h3 class="page-heading">Order Number:</h3>
                                <h3 class="page-heading px-2">#12838383</h3>

                            </div>
                            <div class="order-detail-date d-flex my-2">

                                <!-- Delivered date -->
                                <div class="delivered-date">
                                    <h5> <i class="bi bi-calendar-check-fill mx-2"></i>Date : 22 Nov 2022</h5>

                                </div>

                            </div>

                        </div>
                        <!-- end -->

                        <!-- order detail body -->
                        <!-- product start -->
                        <div class="order-detail-body py-3">
                            <div class="product-container">

                                <div class="product-box d-flex">
                                    <!-- Product image -->
                                    <div class="product-image-container">
                                        <div class="product-image">
                                            <img src="{{ asset('frontend/assets/images/classic-collection/classic-banner1.jpg') }}" class="w-100" alt="product-image">

                                        </div>

                                    </div>

                                    <!-- product name -->
                                    <div class="product-name h-100">
                                        <h4>Long Cargdian</h4>
                                        <div class="product-quality-detail my-4  d-flex">
                                            <h5>small</h5>
                                            <h5 class="px-4">Black</h5>
                                        </div>

                                    </div>
                                    <!-- product rate -->
                                    <div class="product-rate">
                                        <h4>Rs 1000</h4>
                                        <h5>Qty 2</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product end -->
                        <!-- product start -->
                        <div class="order-detail-body py-3">
                            <div class="product-container">

                                <div class="product-box d-flex">
                                    <div class="product-image-container">
                                        <div class="product-image">
                                            <img src="{{ asset('frontend/assets/images/classic-collection/DSC03699.jpg') }}" class="w-100" alt="product-image">

                                        </div>

                                    </div>

                                    <div class="product-name h-100">
                                        <h4>T-shirt </h4>
                                        <div class="product-quality-detail my-4  d-flex">
                                            <h5>large</h5>
                                            <h5 class="px-4">white</h5>
                                        </div>

                                    </div>
                                    <div class="product-rate">
                                        <h4>Rs 234</h4>
                                        <h5>Qty 2</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product end -->



                    </div>
                    <!-- previous order detail end -->






                </div>



            </div>
            <!-- Right section -->
            <div class="col-lg-4 order-detail-right">
                <div class="myOrder-image ">
                    <img src="{{ asset('frontend/assets/images/myorder.png') }}" class="w-100" alt="">

                </div>


            </div>
        </div>
    </div>
</div>





@endsection