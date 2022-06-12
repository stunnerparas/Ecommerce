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
                    </div>
                    <div class="personal-details-container ">
                        <p class="pName">John Smith</p>
                        <p class="pEmail">johnsmith@gmail.com</p>
                    </div>
                    <div class="personal-details-bottom">
                        <p class="text-underline">Change Account Password</p>
                    </div>
                </div>
                <div class="col-md-3 p-3 mx-2 col-12 profile-sub-container">
                    <div class="shipping-details-top d-flex justify-content-between">
                        <h5>Shipping Details</h5>
                        <i class="bi bi-pencil-fill"></i>
                    </div>
                    <div class="shipping-details-container mt-2">
                        <p>House 201,<br>Los Angeles 90011,<br> USA</p>
                    </div>
                </div>
                <div class="col-md-3 p-3 mx-2 col-12 profile-sub-container">
                    <div class="billing-details-top d-flex justify-content-between">
                        <h5>Billing Details</h5>
                        <i class="bi bi-pencil-fill"></i>
                    </div>
                    <p class="mt-2">Same as Shipping Address</p>
                </div>

            </div>
            <div class="profile-bottom-container container-fluid p-0 mt-5">
                <h4 class="text-center">Recent Orders</h4>
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
                                            <p class="font-weight-bold">Manage</p>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <p>1</p>
                                        </th>
                                        <td>
                                            <p>2022/03/02</p>
                                        </td>
                                        <td>
                                            <p>400</p>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.details') }}">
                                                <p class="text-underline">View</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p>1</p>
                                        </th>
                                        <td>
                                            <p>2022/03/02</p>
                                        </td>
                                        <td>
                                            <p>400</p>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.details') }}">
                                                <p class="text-underline">View</p>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p>1</p>
                                        </th>
                                        <td>
                                            <p>2022/03/02</p>
                                        </td>
                                        <td>
                                            <p>400</p>
                                        </td>
                                        <td>
                                            <a href="{{ route('order.details') }}">
                                                <p class="text-underline">View</p>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
