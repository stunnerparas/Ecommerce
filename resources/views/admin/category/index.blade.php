@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>
                @if ($parentCategory)
                    Sub-Categories ({{ $parentCategory->name }})
                @else
                    Categories
                @endif
            </h1>
            <div class="section-header-breadcrumb">
                @if ($parent == 0)
                    <a class="btn btn-primary" href="{{ route('admin.categories.create') }}"><i class="fas fa-plus"></i>
                        Create</a>
                @else
                    <a class="btn btn-primary" href="{{ route('admin.categories.create', ['parent' => $parent]) }}"><i
                            class="fas fa-plus"></i>
                        Create</a>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($categories->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Order</th>
                                            <th scope="col">Featured</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Banner</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key => $category)
                                            <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->order }}</td>
                                                <td>{{ $category->featured }}</td>
                                                <td>
                                                    <a href="{{ asset('images/' . ($category->image ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($category->image ?: 'no-image.png')) }}"
                                                            alt="{{ $category->name }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ asset('images/' . ($category->banner ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($category->banner ?: 'no-image.png')) }}"
                                                            alt="{{ $category->name }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        @if (!$parent)
                                                            <a class="btn btn-primary mr-1"
                                                                href="{{ route('admin.categories.index', ['parent' => $category->id]) }}">Sub-Categories</a>
                                                        @endif

                                                        @if (!$parent)
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
                                                        @else
                                                            <a class="btn btn-success mr-1"
                                                                href="{{ route('admin.categories.edit', ['category' => $category->id, 'parent' => $parent]) }}">Edit</a>
                                                        @endif

                                                        <form class=""
                                                            action="{{ route('admin.categories.destroy', $category->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger delete-category" type="submit">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if ($parent)
                                    {{ $categories->appends($params)->links() }}
                                @else
                                    {{ $categories->links() }}
                                @endif
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
