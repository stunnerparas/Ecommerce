@extends('frontend.layouts.master')

@section('content')
    <div class="track-container container">
        <!-- New order -->
        <div class="track-box my-3">
            <!-- Order number tracking number and estimated date -->
            <div class="track-heading d-flex justify-content-between">
                <!-- order number -->
                <div class="order-no">
                    <span class="order-heading">
                        Order: <span style="color:#e53637;"> #3bc878</span>

                    </span>

                </div>
                <!-- Tracking number and date -->
                <div class="track-num d-flex flex-column">
                    <Span class="num-heading"> DHL 142536475 </Span>


                    <Span class="num-heading py-2"> Estimate date : 2079/9/8 </Span>
                </div>


            </div>
            <!-- Order status -->
            <div class="order-status-container py-3">
                <!-- Processing -->
                <div class="status-item first">
                    <div class="status-circle"></div>
                    <div class="status-text">
                        Processing
                    </div>
                </div>
                <!-- Shipped -->
                <div class="status-item second">
                    <div class="status-circle"></div>
                    <div class="status-text">
                        Shipped
                    </div>
                </div>
                <!-- Out for delivery -->
                <div class="status-item third">
                    <div class="status-circle"></div>
                    <div class="status-text green">
                        <span>Out</span><span>for delivery</span>
                    </div>
                </div>
                <!-- Ariving -->
                <div class="status-item">
                    <div class="status-circle"></div>
                    <div class="status-text green">
                        <span>Ariving</span>

                        @if ($data == 1)
                            <div class="container mt-4">
                                <h4 class="text-center">Order Details</h4>
                                <div
                                    class="order-number-container d-flex justify-content-between mt-3 p-2 profile-sub-container">
                                    <div class="order-info-wrapper">
                                        <h5>Order <span
                                                class="order-number font-weight-bold">#{{ $order->order_number ?? '' }}</span>
                                        </h5>
                                    </div>
                                    <div class="order-total-wrapper">
                                        <h4>Total: <span class="order-total">{{ currencyDBSymbol($order->currency) }}
                                                {{ $order->total_amount ?? 0 }}</span></h4>
                                    </div>
                                </div>
                            </div>

                    </div>

                    <!-- Download button -->
                    <div class="button d-flex justify-content-center">
                        <a href="{{ asset('catalogue/kanchanmaggfinal.pdf') }}" download="catalogue"
                            class="tritary-btn">Download <i class="fas fa-arrow-down"></i></a>
                    </div>
                    <!-- Tracking url -->
                    <div class="tracking-url py-2">
                        <p class="text-center">For futher information for your delivery, please visit <a
                                href="#">Here</a></p>
                    </div>
                </div>
                <!-- Previous order -->
                <div class="track-box my-3">
                    <!-- Order number tracking number and estimated date -->
                    <div class="track-heading d-flex justify-content-between">
                        <!-- order number -->
                        <div class="order-no">
                            <span class="order-heading">
                                Order: <span style="color:#e53637;"> #3bc878</span>

                                </h5>
                                <p class="product-quantity my-auto">
                                    {{ $item->quantity ?? 0 }}
                                </p>
                                <p class="product-total-price my-auto">{{ currencyDBSymbol($order->currency) }}
                                    {{ $subTotal ?? 0 }}</p>
                        </div>
                        </span>

                    </div>
                    <!-- Tracking number and date -->
                    <div class="track-num d-flex flex-column">
                        <Span class="num-heading"> DHL 142536475 </Span>


                        <Span class="num-heading py-2"> Estimate date : 2079/9/8 </Span>
                    </div>


                    <p class="">Cart Total:</p>
                    <!-- Cart total for cart.html -->
                    <p class="totalCartItem">{{ currencyDBSymbol($order->currency) }}
                        {{ $total }}</p>
                </div>
                <div class="cart-total-container d-flex justify-content-between">
                    <p class="">Shipping Cost:</p>
                    <!-- shipping cost after user selection -->
                    <p class="totalCartPrice">{{ currencyDBSymbol($order->currency) }}
                        {{ $order->shipping_charge }}</p>
                </div>
                @if ($order->coupon->discount ?? '')
                    <div class="cart-total-container d-flex justify-content-between">
                        <p class="">Coupon Discount:</p>
                        <p class="totalCartPrice">{{ currencyDBSymbol($order->currency) }}
                            {{ $order->coupon->discount ?? 0 }}</p>
                    </div>
                @endif
                <div class="hr"></div>
                <div class="cart-total-container d-flex justify-content-between mt-2">
                    <!-- Grand total for all -->
                    <p class="font-weight-bold">Total:</p>
                    <p class="totalCartPrice font-weight-bold">
                        @php
                            $total_amount = $total + ($order->shipping_charge ?? 0) - ($order->coupon->discount ?? 0);
                        @endphp
                        {{ currencyDBSymbol($order->currency) }} {{ $total_amount ?? 0 }}
                    </p>
                </div>
                <div class="cart-payment-type">
                    <div class="hr my-2"></div>
                    <p class="payment-type">Currency: {{ $order->currency ?: '' }}</p>
                    <p class="payment-type">Paid with {{ $order->payment_method ?: 'N/A' }}</p>
                    <p class="">Status:<span class="badge badge-success">
                            {{ $order->status ?: 'N/A' }}</span></p>
                </div>
            </div>
        </div>
        </h6>
        @endif
    </div>
    </div>
    </div>
    <!-- Order status -->
    <div class="order-status-container py-3">
        <!-- Processing -->
        <div class="status-item first">
            <div class="status-circle"></div>
            <div class="status-text">
                Processing
            </div>
        </div>
        <!-- Shipped -->
        <div class="status-item second">
            <div class="status-circle"></div>
            <div class="status-text">
                Shipped
            </div>
        </div>
        <!-- Out for delivery -->
        <div class="status-item third">
            <div class="status-circle"></div>
            <div class="status-text green">
                <span>Out</span><span>for delivery</span>
            </div>
        </div>
        <!-- Ariving -->
        <div class="status-item">
            <div class="status-circle"></div>
            <div class="status-text green">
                <span>Ariving</span>

            </div>
        </div>
    </div>

    <!-- Download button -->
    <div class="button d-flex justify-content-center">
        <a href="{{ asset('catalogue/kanchanmaggfinal.pdf') }}" download="catalogue" class="tritary-btn">Download <i
                class="fas fa-arrow-down"></i></a>
    </div>
    <!-- Tracking url -->
    <div class="tracking-url py-2">
        <p class="text-center">For futher information for your delivery, please visit <a href="#">Here</a></p>
    </div>
    </div>
    </div>
@endsection
