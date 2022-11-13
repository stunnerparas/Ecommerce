@extends('frontend.layouts.master')

@section('content')
<div class="colorRequest-image">

    <img src="{{ asset('frontend/assets/images/customecashmeress.jpg') }}" class="w-100 h-100" alt="">

</div>
<div class="custom-made-content container py-5">
    <span class="request-heading">Custom Made</span>
    <p class="pt-3 text-justify" >Personalize your clothing as per your desire by ordering custom-made cashmere. We are offering the facilities of custom made where you can share your design and style as per you want. Please let us know your desire. Do you want a sweater or any cashmere products of your design or with your own logo? We can design and make cashmere items as per your size and demand at a very reasonable price and we guarantee that we are the best in the market with genuine quality.</p>
    We hire the best expert in the town, we handover you the product only after ensuring the finished item is exactly matched as per your order or not. So feel free to contact us, we offer the best quality product of cashmere. Our tailor-made cashmere product will obviously fit with every occasion. We are here to give you the perfect look with a personal touch as per your desire.</p>
    <p class="text-justify">You do not have to worry about the size and design. Kanchan Cashmere is here to take your order and to make you stylish and fashionable utterly. We know that different people have different choices; you can imagine your unique design and give us orders. If you are thin, thick, extra small, or extra-large do not worry, we just need your measurements to give you the best looks. Your design, your size, and your choice.
        Cashmere is the best and most comfortable fabric than any other. Our custom made cashmere will make you happy forever and we guarantee it never goes out of style and it will be with you forever. We built links and connections by offering the best custom made cashmere in Nepal. We have been in the market since 2008.</p>
   Customize the color and design as per your desire. You can get the chance to experiment with a combination of design and color and will provide you the best result as per your need. Cashmere is the best to wear at parties or any special events, it will give you the classy looks as well as luxury looks. It is fit for every occasion and it will increase your self-confidence because of the best comfort and stylish looks. Quality service is our first priority.</p>
    <p class="text-justify">Please remember us for the best cashmere with custom design, we are the largest cashmere producer in Nepal, you can wear cashmere in any season, throughout the year cashmere can be worn either it is winter, spring or summer. We have special designers and the best experts in the town to make every occasion special.
    </p>

</div>
<div class="color-request-container">
    <!-- Color request form -->
    <div class="container py-5">
        <span class="request-heading">Custom Request</span>
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