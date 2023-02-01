@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Made To Order</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($madeToOrders->count() > 0)
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
                                        @foreach ($madeToOrders as $made)
                                            <tr>
                                                <td>{{ $made->name ?? '' }}</td>
                                                <td>{{ $made->email ?? '' }}</td>
                                                <td>{{ $made->phone ?? '' }}</td>
                                                <td>{{ $made->country ?? '' }}</td>
                                                <td>{{ $made->phone_type ?? '' }}</td>
                                                <td>{{ $made->created_at ?? '' }}</td>
                                                <td>{{ $made->status ?? '' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.madetoorder.show', $made->id) }}"
                                                        class="btn btn-success btn-sm">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $madeToOrders->links() }}
                            @else
                                <h5>No Records !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
