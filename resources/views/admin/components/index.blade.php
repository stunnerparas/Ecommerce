@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Components</h1>
            <div class="section-header-breadcrumb">
                {{-- @can('Create Component') --}}
                    <a class="btn btn-primary" href="{{ route('admin.components.create') }}"><i class="fas fa-plus"></i>
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
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($components as $component)
                                            <tr>
                                                <td>
                                                    <a href="{{ asset('images/' . ($component->image ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($component->image ?: 'no-image.png')) }}"
                                                            alt="{{ $component->title }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                <td>{{ $component->title }}</td>

                                                <td>
                                                    <div class="row">

                                                        {{-- @can('Edit Component') --}}
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.components.edit', $component->id) }}">Edit</a>
                                                        {{-- @endcan --}}

                                                        {{-- @can('Delete Page')
                                                            <form class=""
                                                                action="{{ route('admin.pages.destroy', $page->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger delete-page" type="submit">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        @endcan --}}

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $components->links() }}
                            @else
                                <h5>No Components Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-page').click(function(e) {
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
