@extends('frontend.layouts.master')

@section('content')

<!-- Blog Hero section -->

<section class="blog-hero py-3">
    <div class="container-fluid">
        <div class="row">
            <!-- Blog left section -->
            <div class="col-lg-3 px-4">
                <div class="left-sec">

                    <div class="blog-catagories py-3">
                        <h3>Catagories</h3>
                        <ul>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Culture</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- Blog right section -->
            <div class="col-lg-9 py-3">
                <div class="right-sec">
                    <!-- Blog-page Heading -->
                    <h2 class="font-weight-bold">Lifestyle.</h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatum est alias delectus mollitia. Vitae doloribus
                        aspernatur nam adipisci corporis. At vero similique laudantium,
                        officiis neque asperiores architecto illum. Omnis, placeat!
                    </p>
                    <div class="blog-container d-flex">
                        <!-- Blog 1 -->
                        <div class="blog-card">
                            <div class="blog-card-container">
                                <div class="blog-image">
                                    <img src="{{ asset('frontend/assets/images/helpdesk-main.jpg') }}" class="w-100 h-100" alt="accesories" />
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <h6>2021 Nov 7</h6>
                                    </div>
                                    <div class="heading">
                                        <a href="{{ route('show-blog') }}">Lorem, ipsum dolor.</a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
        z                                    elit. Porro, nihil? Aspernatur vitae quidem odit
                                            officiis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog 1 end -->

                        <!-- Blog 2 -->
                        <div class="blog-card">
                            <div class="blog-card-container">
                                <div class="blog-image">
                                    <img src="{{ asset('frontend/assets/images/helpdesk-main.jpg') }}" class="w-100 h-100" alt="accesories" />
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <h6>2021 Nov 7</h6>
                                    </div>
                                    <div class="heading">
                                        <a href="#">Lorem, ipsum dolor.</a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Porro, nihil? Aspernatur vitae quidem odit
                                            officiis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog 2 end -->

                        <!-- Blog 3 -->
                        <div class="blog-card">
                            <div class="blog-card-container">
                                <div class="blog-image">
                                    <img src="{{ asset('frontend/assets/images/helpdesk-main.jpg') }}" class="w-100 h-100" alt="accesories" />
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <h6>2021 Nov 7</h6>
                                    </div>
                                    <div class="heading">
                                        <a href="#">Lorem, ipsum dolor.</a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Porro, nihil? Aspernatur vitae quidem odit
                                            officiis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog 3 end -->

                        <!-- Blog 4 -->
                        <div class="blog-card">
                            <div class="blog-card-container">
                                <div class="blog-image">
                                    <img src="{{ asset('frontend/assets/images/helpdesk-main.jpg') }}" class="w-100 h-100" alt="accesories" />
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <h6>2021 Nov 7</h6>
                                    </div>
                                    <div class="heading">
                                        <a href="#">Lorem, ipsum dolor.</a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Porro, nihil? Aspernatur vitae quidem odit
                                            officiis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog 4 end -->
                        <!-- Blog 5 -->
                        <div class="blog-card">
                            <div class="blog-card-container">
                                <div class="blog-image">
                                    <img src="{{ asset('frontend/assets/images/helpdesk-main.jpg') }}" class="w-100 h-100" alt="accesories" />
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <h6>2021 Nov 7</h6>
                                    </div>
                                    <div class="heading">
                                        <a href="#">Lorem, ipsum dolor.</a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Porro, nihil? Aspernatur vitae quidem odit
                                            officiis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog 5 end -->
                        <!-- Blog 6 -->
                        <div class="blog-card">
                            <div class="blog-card-container">
                                <div class="blog-image">
                                    <img src="{{ asset('frontend/assets/images/helpdesk-main.jpg') }}" class="w-100 h-100" alt="accesories" />
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <h6>2021 Nov 7</h6>
                                    </div>
                                    <div class="heading">
                                        <a href="#">Lorem, ipsum dolor.</a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Porro, nihil? Aspernatur vitae quidem odit
                                            officiis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog 6 end -->
                        <!-- Blog 7 -->
                        <div class="blog-card">
                            <div class="blog-card-container">
                                <div class="blog-image">
                                    <img src="{{ asset('frontend/assets/images/helpdesk-main.jpg') }}" class="w-100 h-100" alt="accesories" />
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <h6>2021 Nov 7</h6>
                                    </div>
                                    <div class="heading">
                                        <a href="#">Lorem, ipsum dolor.</a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Porro, nihil? Aspernatur vitae quidem odit
                                            officiis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog 7 end -->
                        <!-- Blog 8 -->
                        <div class="blog-card">
                            <div class="blog-card-container">
                                <div class="blog-image">
                                    <img src="{{ asset('frontend/assets/images/helpdesk-main.jpg') }}" class="w-100 h-100" alt="accesories" />
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <h6>2021 Nov 7</h6>
                                    </div>
                                    <div class="heading">
                                        <a href="#">Lorem, ipsum dolor.</a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Porro, nihil? Aspernatur vitae quidem odit
                                            officiis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog 8 end -->
                        <!-- Blog 9 -->
                        <div class="blog-card">
                            <div class="blog-card-container">
                                <div class="blog-image">
                                    <img src="{{ asset('frontend/assets/images/helpdesk-main.jpg') }}" class="w-100 h-100" alt="accesories" />
                                </div>
                                <div class="blog-content">
                                    <div class="date">
                                        <h6>2021 Nov 7</h6>
                                    </div>
                                    <div class="heading">
                                        <a href="#">Lorem, ipsum dolor.</a>
                                    </div>
                                    <div class="content">
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Porro, nihil? Aspernatur vitae quidem odit
                                            officiis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Blog 9 end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog hero section closed -->






@endsection