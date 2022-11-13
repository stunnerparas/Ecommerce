@extends('frontend.layouts.master')

@section('content')


<div class="colorRequest-image">

    <img src="{{ asset('frontend/assets/images/cataloguebaner.png') }}" class="w-100 h-100" alt="">

</div>
<div class="color-request-container">
    <!-- Color request form -->
    <div class="container py-5">
        <span class="request-heading">Catalogue Request</span>
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