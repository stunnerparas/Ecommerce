@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Custom Made Requests</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($customMades->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Phone Type</th>
                                            <th scope="col">Date/Time</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customMades as $custom)
                                            <tr>
                                                <td>{{ $custom->name ?? '' }}</td>
                                                <td>{{ $custom->email ?? '' }}</td>
                                                <td>{{ $custom->phone ?? '' }}</td>
                                                <td>{{ $custom->country ?? '' }}</td>
                                                <td>{{ $custom->phone_type ?? '' }}</td>
                                                <td>{{ $custom->created_at ?? '' }}</td>
                                                <td>{{ $custom->status ?? '' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.custom.show', $custom->id) }}"
                                                        class="btn btn-success btn-sm">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $customMades->links() }}
                            @else
                                <h5>No Records !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
