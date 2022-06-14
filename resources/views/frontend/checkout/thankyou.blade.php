@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid mx-auto my-5">
        <div class="container mx-auto">
            <div class="col-12 d-flex justify-content-center align-content-center">
                <div class="">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-6 col-12 order-confirm-img-container">
                            <img class="img-fluid"
                                src="{{ asset('frontend/assets/images/others/undraw_Order_confirmed_re_g0if-3.png') }} "
                                alt="">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mx-auto">
                        <div class="col-12 text-center">
                            <h4>Thank You for your purchase</h4>
                            <p>Your order has been confirmed. You can easily track your order using your order ID <span
                                    class="font-weight-bold order-id"> #{{ $order_number ?? '' }}</span></p>
                            <a href="#">
                                <p class="text-underline">Track Order</p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
