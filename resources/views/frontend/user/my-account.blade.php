@extends('frontend.layouts.master')

@section('content')
    <div class="container-fluid my-5 ">
        <h4 class="text-center">My Profile</h4>
        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 p-3 mx-2 col-12 profile-sub-container">
                    <div class="personal-details-top d-flex justify-content-between">
                        <h5>Personal Details</h5>
                        <i class="bi bi-pencil-fill"></i>
                        <a href="">i</a>
                    </div>
                    <div class="personal-details-container ">
                        <p class="pName">John Smith</p>
                        <p class="pEmail">johnsmith@gmail.com</p>
                    </div>
                    <div class="personal-details-bottom">
                        <a href="{{ route('change.password') }}" class="text-underline">Change Account Password</a>
                    </div>
                </div>
                <div class="col-md-3 p-3 mx-2 col-12 profile-sub-container">
                    <div class="shipping-details-top d-flex justify-content-between">
                        <h5>Shipping Details</h5>
                        <i class="bi bi-pencil-fill"></i>
                        <a href="">i</a>
                    </div>
                    <div class="shipping-details-container mt-2">
                        <p>House 201,<br>Los Angeles 90011,<br> USA</p>
                    </div>
                </div>
                <div class="col-md-3 p-3 mx-2 col-12 profile-sub-container">
                    <div class="billing-details-top d-flex justify-content-between">
                        <h5>Billing Details</h5>
                        <i class="bi bi-pencil-fill"></i>
                        <a href="">i</a>
                    </div>
                    <p class="mt-2">Same as Shipping Address</p>
                </div>

            </div>
            <div class="profile-bottom-container container-fluid p-0 mt-5">
                <h4 class="text-center">Recent Orders</h4>
                @if ($orders->count() > 0)
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-10 recent-order-table d-flex justify-content-center">
                            <div class="recent-order-table-header table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <p class="font-weight-bold">Order No</p>
                                            </th>
                                            <th scope="col">
                                                <p class="font-weight-bold">Order Date</p>
                                            </th>
                                            <th scope="col">
                                                <p class="font-weight-bold">Total Price</p>
                                            </th>
                                            <th scope="col">
                                                <p class="font-weight-bold">Status</p>
                                            </th>
                                            <th scope="col">
                                                <p class="font-weight-bold">Details</p>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                            <tr>
                                                <th scope="row">
                                                    <p>{{ $key + 1 }}</p>
                                                </th>
                                                <td>
                                                    <p>{{ date('Y-m-d, h:i A', strtotime($order->created_at)) }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $order->total_amount }}</p>
                                                </td>
                                                <td>
                                                    <p>{{ $order->status }}</p>
                                                </td>
                                                <td>
                                                    <a href="{{ route('order.details', $order->id) }}">
                                                        <p class="text-underline">View</p>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @else
                    <h5 class="d-flex justify-content-center">No Orders Made till now</h5>
                @endif
            </div>

        </div>
    </div>
@endsection
