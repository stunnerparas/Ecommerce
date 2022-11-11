@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Shipping Details</h1>
            <div class="section-header-breadcrumb">
                {{-- @can('Create Page') --}}
                    <a class="btn btn-primary" href="{{ route('admin.manageshipping.create') }}"><i class="fas fa-plus"></i>
                        Create</a>
                {{-- @endcan --}}
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($manageshippings->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tracking Number</th>
                                            <th scope="col">Shipping Method</th>
                                            <th scope="col">Estimated Arrival Date</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($manageshippings as $manageshipping)
                                            <tr>
                                                <td>{{ $manageshipping->tracking_number }}</td>
                                                <td>{{ $manageshipping->shipping_method }}</td>
                                                <td>{{ $manageshipping->estimated_arrival_date }}</td>
                                                <td>{{ $manageshipping->user_id }}</td>
                                                <td>{{ $manageshipping->shipping_status }}</td>

                                                <td>
                                                    <div class="row">

                                                        {{-- @can('Edit Page') --}}
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.manageshipping.edit', $manageshipping->id) }}">Edit</a>
                                                        {{-- @endcan --}}

                                                        {{-- @can('Delete Page') --}}
                                                            <form class=""
                                                                action="{{ route('admin.manageshipping.destroy', $manageshipping->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger delete-manageshipping" type="submit">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        {{-- @endcan --}}

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $manageshippings->links() }}
                            @else
                                <h5>No Records Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-manageshipping').click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                html: 'If you delete this, it will be gone forever.',
                showDenyButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: `No`,
                icon: 'warning'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest("form").submit();
                }
            })
        })
    </script>
@endsection
