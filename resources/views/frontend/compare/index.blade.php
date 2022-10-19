@extends('frontend.layouts.master')
@section('content')

<div class="productComparision">
    <!-- Comparision hero section -->
    <section class="help-hero">
        <div class="content">
            <h2 class="text-center">Product Comparision</h2>

            <!-- Search box -->
            <div class="compare-box py-3">
                <form action="#">
                    <input type="text" placeholder="Product 1">
                    <input type="text" placeholder="Product 2">
                    <button type="submit" class="compare-btn">Compare</button>

                </form>



            </div>
        </div>



    </section>
   
    <!-- Comparision Container -->
    <div class="comparision-container">


        <!-- Product comparision -->
        <div class="product-comparision-container section-padding">
            <!-- Product nAME -->
            <div class="row py-1">
                <!-- First product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5  first-product-name">
                    <h2 class="text-center">Red Cardians</h2>

                    <div class="rating">

                    </div>



                </div>
                <!-- Specification -->
                <div class="col-lg-2 col-2">



                </div>
                <!-- Second Product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product-name">
                    <h2 class="text-center">Red Jacket</h2>

                </div>

            </div>
            <!-- Product Image -->
            <div class="row py-2 product-image">
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-image">
                    <img src="{{ asset('frontend/assets/images/classic-collection/DSC03296.jpg') }}" alt="">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2"></div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-image">
                    <img src="{{ asset('frontend/assets/images/classic-collection/DSC03296.jpg') }}" alt="">
                </div>

            </div>
            <!-- Category -->
            <div class="row py-1">
                <!-- First product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product">
                    <h4 class="text-center">5 star User Rating</h4>





                </div>
                <!-- Specification -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 specification-box">
                    <span class="material-symbols-outlined google-icon">
                        category
                    </span>
                    <h3>Category</h3>



                </div>
                <!-- Second Product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product">
                    <h4 class="text-center">4 star User Rating</h4>

                </div>

            </div>
            <!-- Price -->
            <div class="row py-1">
                <!-- First product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product first-bg">
                    <h4 class="text-center">RS 2500</h4>





                </div>
                <!-- Specification -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 specification-box">
                    <span class="material-symbols-outlined google-icon">
                        currency_rupee
                    </span>
                    <h3>Price</h3>



                </div>
                <!-- Second Product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product first-bg">
                    <h4 class="text-center">RS 1500</h4>

                </div>

            </div>

            <!-- Color -->
            <div class="row py-1">
                <!-- First product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product">
                    <h4 class="text-center">Red</h4>





                </div>
                <!-- Specification -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2  specification-box">
                    <span class="material-symbols-outlined google-icon">
                        palette
                    </span>
                    <h3>Color</h3>



                </div>
                <!-- Second Product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product">
                    <h4 class="text-center">Red</h4>

                </div>

            </div>

            <!-- Size -->
            <div class="row py-1">
                <!-- First product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product first-bg">
                    <h4 class="text-center">S,M,L,XL,XXL</h4>





                </div>
                <!-- Specification -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 specification-box">
                    <span class="material-symbols-outlined google-icon">
                        crop
                    </span>
                    <h3>Size</h3>



                </div>
                <!-- Second Product --> 
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product first-bg">
                    <h4 class="text-center">S,M,L</h4>

                </div>

            </div>

            <!-- Description -->
            <div class="row py-1">
                <!-- First product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 first-product">
                    <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis necessitatibus labore laboriosam facilis hic sit quam alias suscipit ea odit, sint ratione nemo earum? Quam asperiores nesciunt ea doloremque dolore.</p>





                </div>
                <!-- Specification -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 specification-box">
                    <span class="material-symbols-outlined google-icon">
                        description
                    </span>
                    <h3>Description</h3>



                </div>
                <!-- Second Product -->
                <div class="col-lg-5 col-md-5 col-sm-5 col-5 second-product">
                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque dicta, sed cupiditate doloremque ipsa voluptatibus corporis impedit maxime quam exercitationem esse tenetur nostrum temporibus modi quod ipsum ab aut pariatur.</p>

                </div>

            </div>


        </div>

    </div>


</div>

@endsection