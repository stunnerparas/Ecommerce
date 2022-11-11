@extends('frontend.layouts.master')

@section('content')


<div class="detail-yarn-container">
    <!-- detail-yarn-content -->
    <div class="yarn-content">
        <div class="container">
            <div class="row align-items-center">
                <!-- Content -->
                <div class="col-lg-7 col-md-6 col-sm-12 yarn-content">
                    <!-- Heading -->
                    <div class="heading">
                        <h2 class="py-2 text-center">Yarn</h2>

                        <p class="text-justify">Kanchan Cashmere is the leading Cashmere manufacturer in Nepal which supplies highest quality Cashmere products throughout the world. As a luxury Cashmere manufacturer and supplier, we deal in exclusive clothing and accessories including handmade and knitted sweaters, scarves, mitten, ponchos, gloves, socks and other items that cope up with the latest fashion trends.</p>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6 d-none d-md-block yarn-image">
                    <img src="{{ asset('frontend/assets/images/yarn-image.png') }}" class="w-100 h-100" alt="">


                </div>
            </div>
        </div>
    </div>
    <!-- yarn type -->
    <div class="yarn-type container">
        <div class="row">
            <!-- Type 1 -->
            <div class="col-lg-4  col-md-6 col-sm-12 col-12 py-2">
                <div class="type-container">
                    <!-- Type image -->
                    <div class="type-image">
                        <img src="{{ asset('frontend/assets/images/mulberry-silk.jpg') }}" alt="">

                    </div>
                    <!-- Type heading -->
                    <div class="yarn-heading">
                        <h4>Mulberry Silk </h4>
                    </div>

                </div>


            </div>
            <!-- Type 2 -->
            <div class="col-lg-4  col-md-6 col-sm-12 col-12 py-2">
                <div class="type-container">
                    <!-- Type image -->
                    <div class="type-image">
                        <img src="{{ asset('frontend/assets/images/organic-cashmere.jpg') }}" alt="">

                    </div>
                    <!-- Type heading -->
                    <div class="yarn-heading">
                        <h4>Organic Cashmere</h4>
                    </div>

                </div>


            </div>
            <!-- Type 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-2">
                <div class="type-container">
                    <!-- Type image -->
                    <div class="type-image">
                        <img src="{{ asset('frontend/assets/images/baby.png') }}" alt="">

                    </div>
                    <!-- Type heading -->
                    <div class="yarn-heading">
                        <h4>Baby Cashmere</h4>
                    </div>

                </div>


            </div>
            <!-- Type 4 -->
            <div class="col-lg-4  col-md-6 col-sm-12 col-12 py-2">
                <div class="type-container">
                    <!-- Type image -->
                    <div class="type-image">
                        <img src="{{ asset('frontend/assets/images/alpaca3.jpg') }}" alt="">

                    </div>
                    <!-- Type heading -->
                    <div class="yarn-heading">
                        <h4>Alpaca</h4>
                    </div>

                </div>


            </div>
            <!-- Type 5 -->
            <div class="col-lg-4  col-md-6 col-sm-12 col-12 py-2">
                <a href="{{ route('Typecashmere') }}">
                    <div class="type-container">
                        <!-- Type image -->
                        <div class="type-image">
                            <img src="{{ asset('frontend/assets/images/vicuna.jpg') }}" alt="">

                        </div>
                        <!-- Type heading -->
                        <div class="yarn-heading">
                            <h4>Vicuna</h4>
                        </div>

                    </div>
                </a>


            </div>
            <!-- Type 6 -->
            <div class="col-lg-4  col-md-6 col-sm-12 col-12 py-2">
                <div class="type-container">
                    <!-- Type image -->
                    <div class="type-image">
                        <img src="{{ asset('frontend/assets/images/cashmere-yarn.jpg') }}" alt="">

                    </div>
                    <!-- Type heading -->
                    <div class="yarn-heading">
                        <h4>Cashmere</h4>
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
</div>








@endsection