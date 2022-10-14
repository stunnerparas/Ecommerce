@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Ordered Products</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-primary" href="{{ route('admin.orders.index') }}"><i class="fas fa-back"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($order)
                                <div class="row">
                                    <div class="col-md-6 p-3">
                                        <div class="shipping-details-container">
                                            <h6 class="font-weight-bold">
                                                Order Details
                                            </h6>
                                            <div class="shipping-address-container">
                                                <p class="orderReciverName mt-3">Order Number:
                                                    <b> {{ $order->order_number ?: 'N/A' }}</b>
                                                </p>
                                                <p class="order-shipping address">Payment Method:
                                                    {{ $order->payment_method ?: 'N/A' }}</p>
                                                <p class="order-shipping address">Currency:
                                                    {{ $order->currency ?: '' }}</p>
                                                <p class="order-shipping-contact">
                                                    Transaction ID: {{ $order->transaction_id ?: 'N/A' }}</p>
                                                <p class="order-shipping-contact">
                                                    Transaction Status: {{ $order->transaction_status ?: 'N/A' }}</p>
                                                <p class="order-shipping-contact">
                                                    Registered Customer: {{ $order->user->email ?? 'Not Registered' }}</p>
                                            </div>
                                        </div>
                                        <div class="hr my-2"></div>

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
                                    <div class="col-md-6 p-3">
                                        <div class="shipping-details-container">
                                            <h6 class="font-weight-bold">
                                                Products
                                            </h6>
                                            <div class="shipping-address-container">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Quantity</th>
                                                            <th>Price ({{ $order->currency }})</th>
                                                            <th>Sub-Total ({{ $order->currency }})</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $total = 0;
                                                        @endphp
                                                        @foreach ($orderItems as $item)
                                                            @php
                                                                $subTotal = $item->price * $item->quantity;
                                                                $total += $subTotal;
                                                            @endphp
                                                            <tr>
                                                                <td>{{ $item->product->name }}</td>
                                                                <td>{{ $item->quantity }}</td>
                                                                <td>{{ currencyDBSymbol($order->currency) }} {{ $item->price }}</td>
                                                                <td>{{ currencyDBSymbol($order->currency) }} {{ $subTotal }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <div class="row ">
                                                    <label for="" class="col-12 d-flex justify-content-end"><b>
                                                            Total:
                                                            {{ currencyDBSymbol($order->currency) }} {{ $total }}</b></label>
                                                    <label for="" class="col-12 d-flex justify-content-end"><b>
                                                            Shipping
                                                            Charge: {{ currencyDBSymbol($order->currency) }} 10</b></label>
                                                    <label for="" class="col-12 d-flex justify-content-end"><b>Grand
                                                            Total:
                                                            {{ currencyDBSymbol($order->currency) }} {{ $order->total_amount }}</b></label>

                                                </div>

                                                <form class="" action="{{ route('admin.order.status', $order->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <label for="">Change Status</label>
                                                    <select class="form-control" name="status" id="">
                                                        @foreach (App\Models\Order::status as $key => $value)
                                                            <option value="{{ $key }}"
                                                                {{ old('status', $order->status) == $key ? 'selected' : '' }}>
                                                                {{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                    <br>
                                                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
