@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Help Centers</h1>
            <div class="section-header-breadcrumb">
                {{-- @can('Create Help Center') --}}
                    <a class="btn btn-primary" href="{{ route('admin.helpcenter.create') }}"><i class="fas fa-plus"></i>
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
                            @if ($helpcenters->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Sub Title</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($helpcenters as $helpcenter)
                                            <tr>
                                                <td>
                                                    <a href="{{ asset('images/' . ($helpcenter->image ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($helpcenter->image ?: 'no-image.png')) }}"
                                                            alt="{{ $helpcenter->title }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                <td>{{ $helpcenter->title }}</td>
                                                <td>{{ $helpcenter->sub_title }}</td>

                                                <td>
                                                    <div class="row">

                                                        {{-- @can('Edit Help Center') --}}
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.helpcenter.edit', $helpcenter->id) }}">Edit</a>
                                                        {{-- @endcan --}}

                                                        {{-- @can('Delete Help Center') --}}
                                                            <form class=""
                                                                action="{{ route('admin.helpcenter.destroy', $helpcenter->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger delete-helpcenter" type="submit">
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

                                {{ $helpcenters->links() }}
                            @else
                                <h5>No Help Centers Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-helpcenter').click(function(e) {
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
