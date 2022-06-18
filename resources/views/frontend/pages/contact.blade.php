@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5">
        <div class="container-fluid">
            <h4 class="text-center mb-2">Contact Us</h4>
            <div class="row d-flex flex-wrap mt-5">
                <div class="col-md-4 col-sm-6 d-flex justify-content-center align-content-center">
                    <div class="container contact-child-container d-flex flex-column justify-content-center p-3">
                        <h5 class="text-center font-weight-bold mb-3">Lets Talk</h5>
                        <p class="text-center">Talk to our excellent representative for quicker response</p>
                        <p class="text-center"><i class="bi bi-telephone-fill mr-3"></i> {{ company()->phone ?? '' }}</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4 mt-md-0 col-sm-6 d-flex justify-content-center align-content-center">
                    <div class="container contact-child-container d-flex flex-column justify-content-center p-3">
                        <h5 class="text-center font-weight-bold mb-3">Send a message</h5>
                        <p class="text-center">Send us a message and we will get back to you as soon as possible</p>
                        <p class="text-center"><i class="bi bi-envelope-fill mr-3"></i><a class="text-decoration-none"
                                href="mailto:customercare@kanchan.com"
                                onclick="window.location=another.html">{{ company()->email ?? '' }}</a></p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 mt-4 mt-md-0 d-flex justify-content-center align-content-center">
                    <div
                        class="container contact-child-container d-flex flex-column justify-content-center align-content-end p-3">
                        <h5 class="text-center font-weight-bold mb-3">Visit our Store</h5>
                        <p class="text-center">Visit our store and get the best deals</p>
                        <p class="text-center"><i class="bi mr-3 bi-geo-alt-fill"></i><a
                                href="">{{ company()->address ?? '' }}</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
