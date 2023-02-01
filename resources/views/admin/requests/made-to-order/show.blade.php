@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Made To Order Request Details</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.madetoorder') }}"><i class="fas fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            <table class="table table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $madeToOrder->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $madeToOrder->email ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>{{ $madeToOrder->country ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ $madeToOrder->city ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Street</th>
                                    <td>{{ $madeToOrder->street_no ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Postal Code</th>
                                    <td>{{ $madeToOrder->postal_code ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Type</th>
                                    <td>{{ $madeToOrder->phone_type ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>+{{ ($madeToOrder->country_code ?? '') . '-' . ($madeToOrder->phone ?? '') }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{ $madeToOrder->message ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ $madeToOrder->created_at ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span class="badge badge-primary">{{ $madeToOrder->status ?? '' }}</span>
                                    </td>
                                </tr>
                            </table>
                            @if ($madeToOrder->status == 'Pending')
                                <a href="{{ route('admin.madetoorder.complete', $madeToOrder->id) }}"
                                    class="btn btn-success btn-sm">Mark as
                                    complete</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
