@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="{{ route('admin.orders.index') }}">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-cart-arrow-down"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>New Orders</h4>
                            </div>
                            <div class="card-body">
                                {{ $orders }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="{{ route('admin.business.users') }}">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>New Business Customers (PENDING)</h4>
                            </div>
                            <div class="card-body">
                                {{ $businessPending }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="{{ route('admin.business.users') }}">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Registered Business Customers</h4>
                            </div>
                            <div class="card-body">
                                {{ $business }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="{{ route('admin.users.index') }}">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Normal Customers</h4>
                            </div>
                            <div class="card-body">
                                {{ $customers }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="{{ route('admin.tickets.index') }}">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Pending Tickets</h4>
                            </div>
                            <div class="card-body">
                                {{ $tickets }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="{{ route('admin.products.index') }}">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-tags"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Products</h4>
                            </div>
                            <div class="card-body">
                                {{ $products }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>
@endsection
