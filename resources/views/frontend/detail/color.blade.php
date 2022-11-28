@extends('frontend.layouts.master')

@section('content')
    <!-- detail-Color-content -->
    <div class="yarn-content">
        <div class="container">
            <div class="row align-items-center">
                <!-- Content -->
                <div class="col-lg-7 col-md-6 col-sm-12 yarn-content">
                    <!-- Heading -->
                    <div class="heading">
                        <h2 class="py-2 text-center">{{ $color->title ?? '' }}</h2>


                    </div>
                </div>
                <div class="col-lg-5 col-md-6 d-none d-md-block yarn-image">
                    <img src="{{ asset('images/' . $color->image) }}" class="w-100 h-100" alt="">


                </div>
            </div>
        </div>
    </div>

    <!-- color type -->
    <div class="color-type-container container">
        <div class="row">
            <!-- type 1 -->
            @if ($categories)
                @foreach ($categories as $category)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="color-box d-flex">
                            <div class="color-image">
                                <img src="{{ asset('images/' . $category->image) }}" class="w-100 h-100" alt="">

                            </div>
                            <div class="color-content px-3">
                                <span class="service-heading">{{ $category->title ?? '' }}</span>
                                <p class="pt-2"> {!! $category->description ?? '' !!}</p>

                            </div>
                        </div>

                    </div>
                @endforeach
            @endif


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
                                <p class="text-center">Delivering high quality products with certified courier or transport.
                                </p>
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
                                <p class="text-center">All international delevery is made with in 7 working days or even
                                    less.</p>
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
