@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5">
        <div class="container">
            <h4 class="text-center">Order Details</h4>
            <div class="order-number-container d-flex justify-content-between mt-5 p-2 profile-sub-container">
                <div class="order-info-wrapper">
                    <h5>Order <span class="order-number font-weight-bold">#0123</span></h5>
                </div>
                <div class="order-total-wrapper">
                    <h4>Total: <span class="order-total">$ 230.2</span></h4>
                </div>
            </div>
            <div class="product-description-container">
                <div class="hr my-4"></div>
                <div class="product-description-child  d-sm-flex justify-content-between align-content-center">
                    <div class="product-img-container mx-auto">
                        <img src="{{ asset('images/20220530154306file.DSC04405.jpg') }}" class="product-img" alt="product" srcset="">
                    </div>
                    <div class="product-description-content d-flex mt-sm-0 mt-4 justify-content-between flex-grow-1">
                        <h5 class="product-name font-weight-bold my-auto d-flex flex-column align-content-start">
                            Product Name
                            <p class="product-price my-2 d-flex justify-content-lg-start price">100</p>

                        </h5>
                        <p class="product-quantity my-auto">
                            1
                        </p>
                        <p class="product-total-price my-auto price">100</p>
                    </div>

                </div>
                <div class="hr my-4"></div>


            </div>
            <div class="order-details-bottom-container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6 col-12 ml-md-2 p-3 profile-sub-container">
                        <div class="shipping-details-container">
                            <h6 class="font-weight-bold">
                                Shipping Details
                            </h6>
                            <div class="shipping-address-container">
                                <p class="orderReciverName mt-3">John Smith</p>
                                <p class="order-shipping address">House 201,Los Angeles 90011, USA</p>
                                <p class="order-shipping-contact">9821146218</p>
                            </div>
                        </div>
                        <div class="hr my-2"></div>
                        <div class="billing-details-container">
                            <h6 class="font-weight-bold">
                                Billing Details
                            </h6>
                            <div class="shipping-address-container">
                                <p class="orderReciverName mt-3">John Smith</p>
                                <p class="order-shipping address">House 201,Los Angeles 90011, USA</p>
                                <p class="order-shipping-contact">9821146218</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 col-12 mx-md-2 p-3 profile-sub-container">
                        <h6 class="font-weight-bold">
                            Payment Summary
                            <div class="card mt-3 text-left">
                                <div class="card-body">
                                    <div class="items-summary d-flex justify-content-between">

                                        <p class="">Cart Total:</p>
                                        <!-- Cart total for cart.html -->
                                        <p class="totalCartItem price">200</p>
                                    </div>
                                    <div class="cart-total-container d-flex justify-content-between">
                                        <p class="">Shipping Cost:</p>
                                        <!-- shipping cost after user selection -->
                                        <p class="totalCartPrice price">30.1</p>
                                    </div>
                                    <div class="cart-total-container d-flex justify-content-between">
                                        <p class="">Tax:</p>
                                        <!-- Calculate tax as per country -->
                                        <p class="totalCartPrice price">10.1</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="cart-total-container d-flex justify-content-between mt-2">
                                        <!-- Grand total for all -->
                                        <p class="font-weight-bold">Total:</p>
                                        <p class="totalCartPrice price font-weight-bold">230.2</p>
                                    </div>
                                    <div class="cart-payment-type">
                                        <div class="hr my-2"></div>
                                        <p class="payment-type">Paid with Card</p>
                                    </div>
                                </div>
                            </div>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
