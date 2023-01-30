@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Color Card Request Details</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary" href="{{ route('admin.colorcards') }}"><i class="fas fa-arrow-left"></i>
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
                                    <th>Color Card</th>
                                    <td>{{ $colorCard->color_card ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $colorCard->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $colorCard->email ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>{{ $colorCard->country ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ $colorCard->city ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Street</th>
                                    <td>{{ $colorCard->street_no ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Postal Code</th>
                                    <td>{{ $colorCard->postal_code ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Type</th>
                                    <td>{{ $colorCard->phone_type ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>+{{ ($colorCard->country_code ?? '') . '-' . ($colorCard->phone ?? '') }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{ $colorCard->message ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{ $colorCard->created_at ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span class="badge badge-primary">{{ $colorCard->status ?? '' }}</span>
                                    </td>
                                </tr>
                            </table>
                            @if ($colorCard->status == 'Pending')
                                <a href="{{ route('admin.colorcards.complete', $colorCard->id) }}"
                                    class="btn btn-success btn-sm">Mark as
                                    complete</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
