@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Catalogue Requests</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($catalogues->count() > 0)
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
                                        @foreach ($catalogues as $catalogue)
                                            <tr>
                                                <td>{{ $catalogue->name ?? '' }}</td>
                                                <td>{{ $catalogue->email ?? '' }}</td>
                                                <td>{{ $catalogue->phone ?? '' }}</td>
                                                <td>{{ $catalogue->country ?? '' }}</td>
                                                <td>{{ $catalogue->phone_type ?? '' }}</td>
                                                <td>{{ $catalogue->created_at ?? '' }}</td>
                                                <td>{{ $catalogue->status ?? '' }}</td>
                                                <td>
                                                    <a href="{{ route('admin.catalogue.show', $catalogue->id) }}"
                                                        class="btn btn-success btn-sm">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $catalogues->links() }}
                            @else
                                <h5>No Records !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
