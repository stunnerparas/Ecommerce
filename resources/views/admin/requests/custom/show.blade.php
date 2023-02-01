@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Custom Made Request Details</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.custom') }}"><i class="fas fa-arrow-left"></i>
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
                                    <td>{{ $customMade->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $customMade->email ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>{{ $customMade->country ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ $customMade->city ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Street</th>
                                    <td>{{ $customMade->street_no ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Postal Code</th>
                                    <td>{{ $customMade->postal_code ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Type</th>
                                    <td>{{ $customMade->phone_type ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>+{{ ($customMade->country_code ?? '') . '-' . ($customMade->phone ?? '') }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{ $customMade->message ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ $customMade->created_at ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span class="badge badge-primary">{{ $customMade->status ?? '' }}</span>
                                    </td>
                                </tr>
                            </table>
                            @if ($customMade->status == 'Pending')
                                <a href="{{ route('admin.custom.complete', $customMade->id) }}"
                                    class="btn btn-success btn-sm">Mark as
                                    complete</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
