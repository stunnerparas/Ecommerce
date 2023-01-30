@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Catalogue Request Details</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.catalogue') }}"><i class="fas fa-arrow-left"></i>
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
                                    <td>{{ $catalogueRequest->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $catalogueRequest->email ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>{{ $catalogueRequest->country ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ $catalogueRequest->city ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Street</th>
                                    <td>{{ $catalogueRequest->street_no ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Postal Code</th>
                                    <td>{{ $catalogueRequest->postal_code ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Type</th>
                                    <td>{{ $catalogueRequest->phone_type ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>+{{ ($catalogueRequest->country_code ?? '') . '-' . ($catalogueRequest->phone ?? '') }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{ $catalogueRequest->message ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ $catalogueRequest->created_at ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span class="badge badge-primary">{{ $catalogueRequest->status ?? '' }}</span>
                                    </td>
                                </tr>
                            </table>
                            @if ($catalogueRequest->status == 'Pending')
                                <a href="{{ route('admin.catalogue.complete', $catalogueRequest->id) }}"
                                    class="btn btn-success btn-sm">Mark as
                                    complete</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
