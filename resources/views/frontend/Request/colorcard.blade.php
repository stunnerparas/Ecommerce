@extends('frontend.layouts.master')

@section('content')
<!-- Banner image -->
<div class="colorRequest-image">

    <img src="{{ asset('frontend/assets/images/colorrequest.png') }}" class="w-100 h-100" alt="">

</div>
<div class="color-request-container">
    <!-- Color request form -->
    <div class="container py-5">
        <span class="request-heading">Color Request</span>
        <div class="request-form my-5">
            <form action="">
                <div class="row">
                     <!-- Select color -->
                     <div class="col-lg-12 col-md-12 sol-sm-12 my-2 ">
                        <span class="colorLabel">Select Color: </span>
                        <select name="Select Color" id="">
                            <option value="">Alba</option>
                            <option value="">Ash</option>
                            <option value="">Boucle</option>
                            <option value="">Boucle Loop</option>
                            <option value="">Cashmere 2/28</option>
                            <option value="">Cashmere 2/46</option>
                            <option value="">Cashmere Organic</option>
                            <option value="">Comet</option>
                            <option value="">Crystals</option>
                            <option value="">Highlands</option>
                            <option value="">Gritty</option>
                            <option value="">Frost</option>
                            <option value="">Fleece</option>
                            <option value="">Euphoria</option>
                            <option value="">Nauge / Nirvanae</option>
                            <option value="">Megeve</option>
                            <option value="">Magic</option>
                            <option value="">Kashilk</option>
                            <option value="">Jumping </option>
                            <option value="">Joy</option>
                            <option value="">Jaipur</option>
                            <option value="">Igloo Flakes</option>
                            <option value="">Voluta</option>
                            <option value="">Zefiro</option>
                            <option value="">Wow</option>
                            <option value="">Teddy</option>
                            <option value="">Sunrise</option>
                            <option value="">Soffio</option>
                            <option value="">SENSE</option>
                            <option value="">Rainbow</option>
                            <option value="">Piuma And Super Piuma</option>
                            



                            







                        </select>
                    </div>
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