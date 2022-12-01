@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Collections</h1>
            <div class="section-header-breadcrumb">
                @can('Create Collection')
                    <a class="btn btn-primary" href="{{ route('admin.types.create') }}"><i class="fas fa-plus"></i>
                        Create</a>
                @endcan
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($types->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Collections</th>
                                            <th scope="col">Show In Homepage</th>
                                            <th scope="col">Order Number</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($types as $type)
                                            <tr>
                                                <td>
                                                    <a href="{{ asset('images/' . ($type->image ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($type->image ?: 'no-image.png')) }}"
                                                            alt="{{ $type->type }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                <td>{{ $type->type ?? '' }}</td>
                                                <td>{{ $type->is_featured ? 'YES' : 'NO' }}</td>
                                                <td>{{ $type->order_number ?? '' }}</td>

                                                <td>
                                                    <div class="row">

                                                        @can('Edit Collection')
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.types.edit', $type->id) }}">Edit</a>
                                                        @endcan

                                                        @can('Delete Collection')
                                                            <form class=""
                                                                action="{{ route('admin.types.destroy', $type->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger delete-type" type="submit">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        @endcan

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $types->links() }}
                            @else
                                <h5>No Types Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-type').click(function(e) {
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
