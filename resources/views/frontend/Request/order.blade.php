@extends('frontend.layouts.master')

@section('content')

<div class="colorRequest-image">

    <img src="{{ asset('frontend/assets/images/OrderBannee.jpg') }}" class="w-100 h-100" alt="">

</div>
<div class="custom-made-content container py-5">
    <span class="request-heading">Made to Order</span>
    <p class="py-3">We are the only one in Nepal who offers the best service of “made to order”. It is a rare and great way to satisfy our customers.
        The normal sweater is designed for 5 parts of the body: Collar, Front body, Back body, Left arm, and right arm. In addition, it is the normal process to design each piece. We designed the knitwear with new looks and a new style. Kanchan Cashmere is the only cashmere manufacturer in Nepal since 2008 that specializes in made to order items.</p>

</div>
<div class="color-request-container">
    <!-- Color request form -->
    <div class="container py-5">
        <span class="request-heading">Made to Order</span>
        <div class="request-form my-5">
            <form action="">
                <div class="row">

                    <!-- First-name -->
                    <div class="col-lg-6 col-md-6 sol-sm-12 my-2">
                        <input type="text" placeholder="Name" name="text" class="w-100 h-100" required>
                    </div>
                    <!-- Email -->
                    <div class="col-lg-6 col-md-6 sol-sm-12 my-2 ">
                        <input type="email" placeholder="Email" name="text" class="w-100 h-100" required>
                    </div>
                    <!-- Country -->
                    <div class="col-lg-6 col-md-6 sol-sm-12 my-2 ">
                        <input type="text" placeholder="Country" name="text" class="w-100 h-100" required>
                    </div>
                    <!-- Country code -->
                    <div class="col-lg-6 col-md-6 sol-sm-12 my-2 ">
                        <input type="text" placeholder="Country code" name="text" class="w-100 h-100" required>
                    </div>
                    <!-- City -->
                    <div class="col-lg-6 col-md-6 sol-sm-12 my-2 ">
                        <input type="text" placeholder="City" name="text" class="w-100 h-100" required>
                    </div>
                    <!-- Streets -->
                    <div class="col-lg-6 col-md-6 sol-sm-12 my-2 ">
                        <input type="text" placeholder="Street no" name="text" class="w-100 h-100" required>
                    </div>
                    <!-- Postal Code -->
                    <div class="col-lg-6 col-md-6 sol-sm-12 my-2 ">
                        <input type="text" placeholder="Postal Code" name="text" class="w-100 h-100" required>
                    </div>
                    <!-- Phone -->
                    <div class="col-lg-6 col-md-6 sol-sm-12 my-2 ">
                        <input type="tel" placeholder="Phone" name="text" class="w-100 h-100" required>
                    </div>
                    <!-- Submit button -->
                    <div class="col-lg-12 color-submit d-flex justify-content-center my-4">
                        <button type="submit">Submit</button>
                    </div>




                </div>
            </form>
        </div>

    </div>
</div>





@endsection