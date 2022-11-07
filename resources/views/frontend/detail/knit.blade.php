@extends('frontend.layouts.master')

@section('content')

<!-- detail-Knit-content -->
<div class="yarn-content">
    <div class="container">
        <div class="row align-items-center">
            <!-- Content -->
            <div class="col-lg-7 col-md-6 col-sm-12 yarn-content">
                <!-- Heading -->
                <div class="heading">
                    <h2 class="py-2 text-center">The Knits</h2>

                    <p class="text-justify">Knitted fabric is a textile that results from knitting. Its properties are distinct from woven fabric in that it is more flexible and can be more readily constructed into smaller pieces, making it ideal for socks and hats.</p>

                </div>
            </div>
            <div class="col-lg-5 col-md-6 d-none d-md-block yarn-image">
                <img src="{{ asset('frontend/assets/images/yarn-image.png') }}" class="w-100 h-100" alt="">


            </div>
        </div>
    </div>
</div>
<!-- Knit type  -->
<div class="knit-box-container">
    <div class="container">
        <div class="row">
           
             <!-- type 1 -->
             <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                <div class="knit-box">
                    <!-- Image -->
                    <div class="knit-image">
                        <img src="{{ asset('frontend/assets/images/knit-design-1.jpg') }}" alt="">
                    </div>
                    <!-- Type of Knit -->
                    <div class="knit-heading pt-3">
                        <span class="service-heading d-block text-center">Knit 1</span>
                    </div>
                </div>

            </div>
            

        </div>
       
    </div>
</div>
 <!-- Services section -->
 <div class="service-section container pt-5 pb-3">
        <div class="service-heading">
            <span class="section-heading text-center d-block">Why Choose Us?</span>
        </div>
        <div class="services-box">
            <div class="row pt-4">
                <!-- Services -->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="box">
                        <!-- icon -->
                        <div class="icon">
                            <span class="material-symbols-outlined google-icon">
                                public
                            </span>

                        </div>

                        <div class="content py-2">
                            <!-- Heading -->
                            <div class="heading">
                                <span class="service-heading d-block text-center">Reliable Shipping</span>
                            </div>
                            <!-- paragraph -->
                            <div class="paragraph py-1">
                                <p class="text-center">Delivering high quality products with certified courier or transport.</p>
                            </div>

                        </div>
                    </div>

                </div>
                 <!-- Services -->
                 <div class="col-lg-4 col-md-6  my-3">
                    <div class="box">
                        <!-- icon -->
                        <div class="icon">
                            <span class="material-symbols-outlined google-icon">
                                Flight
                            </span>

                        </div>

                        <div class="content py-2">
                            <!-- Heading -->
                            <div class="heading">
                                <span class="service-heading d-block text-center">Fast Delivery</span>
                            </div>
                            <!-- paragraph -->
                            <div class="paragraph py-1">
                                <p class="text-center">All international delevery is made with in 7 working days or even less.</p>
                            </div>

                        </div>
                    </div>

                </div>
                 <!-- Services -->
                 <div class="col-lg-4 col-md-6 my-3">
                    <div class="box">
                        <!-- icon -->
                        <div class="icon">
                            <span class="material-symbols-outlined google-icon">
                            support_agent
                            </span>

                        </div>

                        <div class="content py-2">
                            <!-- Heading -->
                            <div class="heading">
                                <span class="service-heading d-block text-center">Customer Support</span>
                            </div>
                            <!-- paragraph -->
                            <div class="paragraph py-1">
                                <p class="text-center">24/7 Support is provided via phone call, email or online chat</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





@endsection