@extends('frontend.layouts.master')
@section('content')



<!-- Order tracking container start -->
<div class="orderTracking">

    <!--section Heading  -->
    <div class="heading">
        <div class="container">
            <h2>Order Tracking</h2>
        </div>
    </div>
    <!-- end -->

    <!-- Order tracking Description -->
    <div class="description container py-3">

        <!-- heading -->
        <h4 class="section-heading">Lorem ipsum dolor sit.</h4>

        <!-- Description -->
        <p class="text-justify my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi in tempore rem asperiores non, provident a quas voluptate debitis alias itaque vel hic tenetur ipsam exercitationem enim, delectus deleniti dicta officia excepturi expedita! Odit laudantium nulla commodi est officia excepturi, quisquam sit, aperiam rem saepe sunt esse tempore corporis nemo earum repellat eligendi dolorem minima architecto libero. Illum quod facilis impedit earum, modi placeat est quis repudiandae sed minima, perferendis rerum excepturi omnis magnam consequatur voluptas? Accusamus ea iusto natus, nisi cum iure impedit aspernatur ipsum? Ullam, modi vero expedita laborum ea quae, quis fugit voluptatibus, optio velit veritatis nemo.</p>
    </div>


    <!-- Order tracking image -->
    <div class="orderTacking-image container">

        <img src="{{ asset('frontend/assets/images/DHL.JPG') }}" class="w-100 h-100" alt="DHL banner">
    </div>
    <!-- OrderTracking platforms -->
    <div class="orderTrackPlatform container py-3">
        <!-- Heading -->
        <h2>Track Your Order</h2>
       
        <div class="form px-3 py-3">
            <form action="" method="">
                <!-- Track order DHL -->
                <div class="platform1">
                <input type="radio" id="DHL" name="DHL" value="DHL">
                <label for="DHL"> <i class="fas fa-plane"></i> Track order through DHL</label> <br>
                </div>
                
               
                <!-- Track order Other Platform -->
                <div class="platform2 my-3">
                <input type="radio" id="other" name="other" value="other">
                <label for="other"> <i class="fas fa-truck"></i> Track order through others</label>
                </div>
               

                <div class="button">
                    <a href="{{ route('order-tracking-other') }}" class="secondary-btn">Track</a>
                </div>
                
            </form>
        </div>
    </div>



</div>


<!-- order tracking container end -->





@endsection