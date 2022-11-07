@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Search Results For "{{ request('query') }}"</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>
        <h5>{{ $products->count() }} items found</h5>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            @include('admin.includes.messages')
                            @if ($products->count() > 0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $key => $product)
                                            <tr>
                                                <td>
                                                    <a href="{{ asset('images/' . ($product->image ?: 'no-image.png')) }}"
                                                        data-fancybox="demo" class="fancybox">
                                                        <img src="{{ asset('images/' . ($product->image ?: 'no-image.png')) }}"
                                                            alt="{{ $product->name }}" style="height: 50px">
                                                    </a>
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price ?: '-' }}</td>
                                                <td><span
                                                        class="{{ $product->type == 'Category' ? 'badge badge-warning' : 'badge badge-primary' }}">{{ $product->type }}</span>
                                                </td>

                                                <td>
                                                    <div class="row">

                                                        @if ($product->type == 'Product')
                                                            @can('Edit Product')
                                                                <a class="btn btn-success mr-1"
                                                                    href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                                                            @endcan

                                                            @can('Delete Product')
                                                                <form class=""
                                                                    action="{{ route('admin.products.destroy', $product->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger delete-product"
                                                                        type="submit">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            @endcan
                                                        @else
                                                            {{-- @if (!$parent) --}}
                                                            @can('Create Category')
                                                                <a class="btn btn-primary mr-1"
                                                                    href="{{ route('admin.categories.index', ['parent' => $product->id]) }}">Sub-Categories</a>
                                                            @endcan
                                                            {{-- @endif --}}

                                                            @can('Edit Category')
                                                                <a class="btn btn-success mr-1"
                                                                    href="{{ route('admin.categories.edit', $product->id) }}">Edit</a>
                                                                {{-- @if (!$parent)
                                                                @else
                                                                    <a class="btn btn-success mr-1"
                                                                        href="{{ route('admin.categories.edit', ['category' => $product->id, 'parent' => $parent]) }}">Edit</a>
                                                                @endif --}}
                                                            @endcan

                                                            @can('Delete Category')
                                                                <form class=""
                                                                    action="{{ route('admin.categories.destroy', $product->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger delete-product"
                                                                        type="submit">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            @endcan
                                                        @endif


                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- {{ $products->links() }} --}}
                            @else
                                <h5>No Records !!</h5>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script>
        $('.delete-product').click(function(e) {
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
