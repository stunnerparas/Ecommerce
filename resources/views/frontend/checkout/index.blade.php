@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid p-0 my-5">
        <div class="container-fluid mx-auto">
            <div class="row d-flex justify-content-center d-flex justify-content-center">
                <!-- Shipping details form -->
                <div class="col-lg-6 col-12 order-lg-0 px-md-5 px-4 order-1 mt-lg-0 mt-4">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @include('frontend.includes.messages')
                        @csrf
                        <div class="shipping-form-container">
                            <div class="shipping-form-inner">
                                <div class="h4 mb-3">Shipping Details</div>
                                <div class="row my-3">
                                    <div class="col-sm-6 col-12 mb-3 mb-sm-0">
                                        <!-- First Name for shipping -->
                                        <input type="text" name="shipping_full_name" class="form-control p-4"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <!-- Last Name for shipping -->
                                        <input type="email" name="shipping_email" class="form-control p-4"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <!-- Address of shipping -->
                                        <input type="text" name="shipping_address" class="form-control p-4"
                                            placeholder=" Address ">
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col ">
                                        <!-- Apartment number, suite number -->
                                        <input type="text " name="shipping_apartment" class="form-control p-4 "
                                            placeholder="Apartment, suite, (optional) ">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4 col-6">
                                        <!-- City for shipping -->
                                        <input type="text " name="shipping_city" class="form-control p-4 "
                                            placeholder="City">
                                    </div>
                                    <div class="col-sm-4 col-6 mb-3 mb-sm-0">
                                        <!-- State for shipping -->
                                        <input type="text " name="shipping_state" class="form-control p-4 "
                                            placeholder="State">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <!-- Zip code for shipping -->
                                        <input type="text " name="shipping_postal_code" class="form-control p-4 "
                                            placeholder="Postal Code">
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col ">
                                        <input type="text " name="shipping_country" class="form-control p-4 "
                                            placeholder="Country">
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col ">
                                        <!-- Contact information for shipping -->
                                        <input type="text " name="shipping_phone" class="form-control p-4 " placeholder="Phone">
                                    </div>
                                </div>

                            </div>
                            <div id="billingAddress" class="billing-address-info">
                                <div class="row default-shipping-container mt-3 p-3">
                                    <div class="col-12 d-flex align-content-center justify-content-between">
                                        <div class="deafult-billing-info">
                                            <h4>Billing address same as shipping</h4>
                                        </div>
                                        <input type="radio" name="billAddress" value="no" checked id="billSaveAddress">
                                    </div>
                                </div>
                                <div class="row default-shipping-container mt-3 p-3">
                                    <div class="col-12 d-flex align-content-center justify-content-between">
                                        <div class="deafult-shipping-info">
                                            <h4>Set a new billing address</h4>
                                        </div>
                                        <input type="radio" name="billAddress" value="yes" id="billNewAddress">

                                    </div>
                                </div>
                                <div id="newBillingAddress" style="display: none;" class="billing-form-inner mt-5">
                                    <!-- New Billing address form -->
                                    <div class="row mb-3">
                                        <div class="col-sm-6 col-12 mb-3 mb-sm-0">
                                            <!-- First Name for billing -->
                                            <input type="text" name="billing_full_name" class="form-control p-4"
                                                placeholder="Full Name">
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <!-- Last Name for billing -->
                                            <input type="email" name="billing_email" class="form-control p-4"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <!-- Address of billing -->
                                            <input type="text" name="billing_address" class="form-control p-4"
                                                placeholder=" Address ">
                                        </div>
                                    </div>
                                    <div class="row mb-3 ">
                                        <div class="col ">
                                            <!-- Apartment number, suite number for billing -->
                                            <input type="text " name="billing_apartment" class="form-control p-4 "
                                                placeholder="Apartment, suite, (optional) ">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-4 col-6">
                                            <!-- City for shipping billing -->
                                            <input type="text " name="billing_city" class="form-control p-4 "
                                                placeholder="City">
                                        </div>
                                        <div class="col-sm-4 col-6 mb-3 mb-sm-0">
                                            <!-- State for shipping -->
                                            <input type="text " name="billing_state" class="form-control p-4 "
                                                placeholder="State">
                                        </div>
                                        <div class="col-sm-4 col-12">
                                            <!-- Zip code for shipping billing -->
                                            <input type="text " name="billing_postal_code" class="form-control p-4 "
                                                placeholder="Postal Code">
                                        </div>
                                    </div>
                                    <div class="row mb-3 ">
                                        <div class="col ">
                                            <input type="text " name="billing_country" class="form-control p-4 "
                                                placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="row mb-3 ">
                                        <div class="col ">
                                            <!-- Contact information for billing -->
                                            <input type="text " name="billing_phone" class="form-control p-4 " placeholder="Phone">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-3 d-flex justify-content-center">
                                <button id="quoteBtn" onclick="" class="btn primary-btn get-quote-btn mt-2">Get Quote<i
                                        class="bi ml-3 bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12 px-md-0 px-0 order-lg-1 order-0">
                    <div class="container d-flex flex-column align-content-center mx-auto">
                        <div class="cart-item-view col-lg-10 col-12">
                            <h4>Items in Cart</h4>
                            <div class="checkout-item-lis my-4">

                                @foreach ($cartItems as $item)
                                    <div class="cart-single-item mb-3 p-3 d-flex justify-content-between">
                                        <div class="product-desciption-container">
                                            <h5 class="font-weight-bold">{{ $item->name }}</h5>
                                            <p>{{ $item->attributes->size . ' / ' . $item->attributes->color }}</p>
                                        </div>
                                        <p class="item-total">{{ $item->quantity }}</p>
                                        <p class="price">{{ $item->price * $item->quantity }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-10 col-12">
                            <div class="d-flex justify-content-between">
                                <h4 class="">Cart Summary</h4>
                                <!-- Go back to cart page -->
                                <a href="{{ route('cart.index') }}" class="text-underline">Change Items?</a>
                            </div>
                            <div class="card text-left">
                                <div class="card-body">
                                    <div class="items-summary d-flex justify-content-between">
                                        <!-- Total items present in the cart -->
                                        <p class="">Total Items:</p>
                                        <p class="totalCartItem">{{ $cartItems->count() }}</p>
                                    </div>
                                    <div class="items-summary d-flex justify-content-between">
                                        <!-- Total items present in the cart -->
                                        <p class="">Total Cost:</p>
                                        <p class="totalCartItem">${{ Cart::getTotal() }}</p>
                                    </div>
                                    <div class="items-summary d-flex justify-content-between">
                                        <!-- Total items present in the cart -->
                                        <p class="">Shipping Cost:</p>
                                        <p class="totalCartItem">$10</p>
                                    </div>
                                    <div class="cart-total-container d-flex justify-content-between">
                                        <!-- Total of the cart -->
                                        <p class="">Grand Total:</p>
                                        <p class="totalCartPrice price">{{ Cart::getTotal() + 10 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
