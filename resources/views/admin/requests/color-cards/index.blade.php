@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Color Card Requests</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($colorCards->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Color Card</th>
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
                                        @foreach ($colorCards as $color)
                                            <tr>
                                                <td>{{ $color->color_card ?? '' }}</td>
                                                <td>{{ $color->name ?? '' }}</td>
                                                <td>{{ $color->email ?? '' }}</td>
                                                <td>{{ $color->phone ?? '' }}</td>
                                                <td>{{ $color->country ?? '' }}</td>
                                                <td>{{ $color->phone_type ?? '' }}</td>
                                                <td>{{ $color->created_at ?? '' }}</td>
                                                <td>{{ $color->status ?? '' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.colorcards.show', $color->id) }}"
                                                        class="btn btn-success btn-sm">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $colorCards->links() }}
                            @else
                                <h5>No Records !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
