@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="float: left" class="card-title">{{ __('Transaction Statistics') }}</h4>
                {{-- <a class="btn btn-primary btn-sm" style="float: right"
                    href="{{ route('admin.categories.create') }}">{{ __('Create') }}</a> --}}

                <div class="table-responsive">
                    <table class="table table-striped categories-datatable">
                        <thead>
                            <tr>
                                <th>{{ __('Period') }}</th>
                                <th>{{ __('Product Sold') }}</th>
                                <th>{{ __('Total Number Of Transaction') }}</th>
                                <th>{{ __('Transaction Amount') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Today</td>
                                <td>{{ $today['productSold'] ?? '' }}</td>
                                <td>{{ $today['numberOfTransaction'] ?? '' }}</td>
                                <td>{{ $today['transactionAmount'] ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Yesterday</td>
                                <td>{{ $yesterday['productSold'] ?? '' }}</td>
                                <td>{{ $yesterday['numberOfTransaction'] ?? '' }}</td>
                                <td>{{ $yesterday['transactionAmount'] ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>1 Week</td>
                                <td>{{ $week['productSold'] ?? '' }}</td>
                                <td>{{ $week['numberOfTransaction'] ?? '' }}</td>
                                <td>{{ $week['transactionAmount'] ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>1 Month</td>
                                <td>{{ $month['productSold'] ?? '' }}</td>
                                <td>{{ $month['numberOfTransaction'] ?? '' }}</td>
                                <td>{{ $month['transactionAmount'] ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>3 Months</td>
                                <td>{{ $threeMonth['productSold'] ?? '' }}</td>
                                <td>{{ $threeMonth['numberOfTransaction'] ?? '' }}</td>
                                <td>{{ $threeMonth['transactionAmount'] ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>1 Year</td>
                                <td>{{ $year['productSold'] ?? '' }}</td>
                                <td>{{ $year['numberOfTransaction'] ?? '' }}</td>
                                <td>{{ $year['transactionAmount'] ?? '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
