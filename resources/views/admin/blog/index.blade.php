@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blogs</h1>
            <div class="section-header-breadcrumb">
                <a class="btn btn-primary" href="{{ route('admin.blogs.create') }}"><i class="fas fa-plus"></i>
                    Create</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($blogs->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>
                                                    <a href="{{ asset('images/' . ($blog->image ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($blog->image ?: 'no-image.png')) }}"
                                                            alt="{{ $blog->title }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->author }}</td>
                                                <td>{{ $blog->date }}</td>
                                                <td>{{ $blog->category->name ?? '' }}</td>

                                                <td>
                                                    <div class="row">

                                                        <a class="btn btn-success mr-1"
                                                            href="{{ route('admin.blogs.edit', $blog->id) }}">Edit</a>

                                                        <form class=""
                                                            action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger delete-blog" type="submit">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $blogs->links() }}
                            @else
                                <h5>No Blogs Found !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-blog').click(function(e) {
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
