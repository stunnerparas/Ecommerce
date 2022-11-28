@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Categories ({{ $component->title ?? '' }})</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-secondary mr-2" href="{{ route('admin.components.index') }}"><i
                    class="fas fa-arrow-left"></i>
                Back</a>

                {{-- @can('Create Component') --}}
                <a class="btn btn-primary" href="{{ route('admin.componenttypes.create', $component->id) }}"><i
                        class="fas fa-plus"></i>
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
                            @if ($components->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($components as $com)
                                            <tr>
                                                <td>
                                                    <a href="{{ asset('images/' . ($com->image ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($com->image ?: 'no-image.png')) }}"
                                                            alt="{{ $com->title }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                <td>{{ $com->title }}</td>
                                                <td>{{ $component->title ?? '' }}</td>

                                                <td>
                                                    <div class="row">

                                                        {{-- @can('Edit Component') --}}
                                                        <a class="btn btn-success mr-1"
                                                            href="{{ route('admin.componenttypes.edit', $com->id) }}">Edit</a>
                                                        {{-- @endcan --}}

                                                        {{-- @can('Delete Page') --}}
                                                        <form class=""
                                                            action="{{ route('admin.componenttypes.destroy', $com->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger delete-category" type="submit">
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

                                {{ $components->links() }}
                            @else
                                <h5>No Categories Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-category').click(function(e) {
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
