@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5">
        <div class="container">
            <h4 class="text-center">Order Details</h4>
            <div class="order-number-container d-flex justify-content-between mt-5 p-2 profile-sub-container">
                <div class="order-info-wrapper">
                    <h5>Order <span class="order-number font-weight-bold">#{{ $order->order_number ?? '' }}</span></h5>
                </div>
                <div class="order-total-wrapper">
                    <h4>Total: <span class="order-total">
                            {{ currencyDBSymbol($order->currency) }}{{ $order->total_amount + ($order->shipping_charge ?? 0) - ($order->coupon->discount ?? 0) }}</span>
                    </h4>
                </div>
            </div>
            <div class="product-description-container">
                <div class="hr my-4"></div>
                @if ($orderItems->count() > 0)
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($orderItems as $item)
                        @php
                            $subTotal = $item->product->price * $item->quantity;
                            $total += $subTotal;
                        @endphp
                        <div class="product-description-child  d-sm-flex justify-content-between align-content-center">
                            <div class="product-img-container mx-auto">
                                <img src="{{ asset('images/' . ($item->product->featured_image ?? '')) }}"
                                    class="product-img" alt="product" srcset="">
                            </div>
                            <div
                                class="product-description-content d-flex mt-sm-0 mt-4 justify-content-between flex-grow-1">
                                <h5 class="product-name font-weight-bold my-auto d-flex flex-column align-content-start">
                                    {{ $item->product->name ?? '' }}
                                    <p class="product-price my-2 d-flex justify-content-lg-start">
                                        {{ currencyDBSymbol($order->currency) }}{{ $item->price }}
                                    </p>

                                </h5>
                                <p class="product-quantity my-auto">
                                    {{ $item->quantity ?? 0 }}
                                </p>
                                <p class="product-total-price my-auto">
                                    {{ currencyDBSymbol($order->currency) }}{{ $subTotal ?? 0 }}</p>
                            </div>

                        </div>
                        <div class="hr my-4"></div>
                    @endforeach
                @endif

            </div>
            <div class="order-details-bottom-container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6 col-12 ml-md-2 p-3 profile-sub-container">
                        <div class="shipping-details-container">
                            <h6 class="font-weight-bold">
                                Shipping Details
                            </h6>
                            <div class="shipping-address-container">
                                <p class="orderReciverName mt-3">{{ $shipping->full_name ?? '' }}</p>
                                <p class="order-shipping address">{{ $shipping->address ?? '' }},
                                    {{ $shipping->city ?? '' }},
                                    {{ $shipping->state ?? '' }},
                                    {{ $shipping->country ?? '' }}</p>
                                <p class="order-shipping-contact">
                                    {{ $shipping->apartment ?? '' }},
                                    {{ $shipping->postal_code ?? '' }}-{{ $shipping->phone ?? '' }}
                                </p>
                                <p class="order-shipping-contact">
                                    {{ $shipping->email ?? '' }}</p>
                            </div>
                        </div>
                        <div class="hr my-2"></div>
                        <div class="billing-details-container">
                            <h6 class="font-weight-bold">
                                Billing Details
                            </h6>
                            <div class="shipping-address-container">
                                <p class="orderReciverName mt-3">{{ $billing->full_name ?? '' }}</p>
                                <p class="order-shipping address">{{ $billing->address ?? '' }},
                                    {{ $billing->city ?? '' }},
                                    {{ $billing->state ?? '' }},
                                    {{ $billing->country ?? '' }}</p>
                                <p class="order-shipping-contact">
                                    {{ $billing->apartment ?? '' }},
                                    {{ $billing->postal_code ?? '' }}-{{ $billing->phone ?? '' }}</p>
                                <p class="order-shipping-contact">
                                    {{ $billing->email ?? '' }}</p>
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
                                        <p class="totalCartItem">
                                            {{ currencyDBSymbol($order->currency) }}{{ $total }}</p>
                                    </div>
                                    <div class="cart-total-container d-flex justify-content-between">
                                        <p class="">Shipping Charge:</p>

                                        <p class="totalCartPrice">{{ currencyDBSymbol($order->currency) }}
                                            {{ $order->shipping_charge ?? 0 }}</p>
                                    </div>
                                    <div class="cart-total-container d-flex justify-content-between">
                                        <p class="">Coupon Discount:</p>
                                        <!-- Calculate tax as per country -->
                                        <p class="totalCartPrice">{{ currencyDBSymbol($order->currency) }}
                                            {{ $order->coupon->discount ?? 0 }}</p>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="cart-total-container d-flex justify-content-between mt-2">
                                        <!-- Grand total for all -->
                                        <p class="font-weight-bold">Total:</p>
                                        <p class="totalCartPrice font-weight-bold">
                                            {{ currencyDBSymbol($order->currency) }}{{ $order->total_amount + ($order->shipping_charge ?? 0) - ($order->coupon->discount ?? 0) }}
                                        </p>
                                    </div>
                                    <div class="cart-payment-type">
                                        <div class="hr my-2"></div>
                                        <p class="payment-type">Paid with {{ $order->payment_method ?: 'N/A' }}</p>
                                        <p class="">Status:<span class="badge badge-success">
                                                {{ $order->status ?: 'N/A' }}</span></p>
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
